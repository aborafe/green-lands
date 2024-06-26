<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $extension = $request->file('image')->getClientOriginalExtension();
        $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        $request->file('image')->storeAs('news', $newName, 'public');
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => 'storage/news/' . $newName,
        ]);
        return redirect()->back()->with('success', 'تم اضافه المنشور بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $news = News::all();
        return view('back.news', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $news = News::find($news->id);

        return view('back.edit_news', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $extension = $request->file('image')->getClientOriginalExtension();
        $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        $request->file('image')->storeAs('news', $newName, 'public');
        $news->update([
            'title' => $request->title,
            'description' => $request->description,
            'img' => 'storage/news/' . $newName,
        ]);
        return redirect()->back()->with('success', 'تم تحديث المنشور بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        // Delete the image file from storage
        if (Storage::disk('public')->exists($news->img)) {
            Storage::disk('public')->delete($news->img);
        }

        // Delete the news record
        $news->delete();


        return redirect()->back()->with('success', 'تم حذف المنشور بنجاح');
    }
}
