<?php

namespace App\Http\Controllers;

use App\Models\Arey;
use Illuminate\Http\Request;

class AreyController extends Controller
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
            'name' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $extension = $request->file('img')->getClientOriginalExtension();
        $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
        $request->file('img')->storeAs('cards', $newName, 'public');
        Arey::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => 'storage/cards/' . $newName,
        ]);
        return redirect()->back()->with('success', 'تم اضافة البطاقة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Arey $arey)
    {
        $areys = Arey::all();
        return view('back.card', compact('areys'));
        // return view('back.card');
    }
    public function home(Arey $arey)
    {
        $areys = Arey::all();
        return view('front.card', compact('areys'));
        // return view('back.card');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $arey = Arey::find($id);
        return view('back.edit_cards', compact('arey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $arey = Arey::find($id);
    
        // التحقق من وجود الكائن
        if (!$arey) {
            return redirect()->back()->with('error', 'الكائن غير موجود');
        }
    
        // التحقق من صحة الإدخالات
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // معالجة الصورة إذا كانت موجودة
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $extension = $request->file('img')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('img')->storeAs('cards', $newName, 'public');
    
            // تحديث الكائن مع الصورة
            $arey->update([
                'name' => $request->name,
                'description' => $request->description,
                'img' => 'storage/cards/' . $newName,
            ]);
        } else {
            // تحديث الكائن بدون الصورة
            $arey->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }
    
        return redirect()->route('card.show')->with('success', 'تم تحديث البطاقة بنجاح');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $arey = Arey::find($id);
        $arey->delete();
        return redirect()->back()->with('success', 'تم حذف البطاقة بنجاح');
    }
}
