<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
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
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'National' => 'required',
            'email' => 'required',
            'date' => 'required',
            'location' => 'required',
            'whatsaap' => 'required',
        ]);
        $order = Order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'description' => $request->description,
            'National' => $request->National,
            'email' => $request->email,
            'date' => $request->date,
            'location' => $request->location,
            'whatsaap' => $request->whatsaap,
        ]);
        return redirect()->route('home')->with('success', 'تم تقديم الطلب بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        DB::table('order')
        ->where('id', $id)
        ->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'تم تحديث الطلب بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back()->with('success', 'تم حذف الطلب بنجاح');
    }
}
