<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Meal;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::all();
        return view('admin.orders', compact('orders') );
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
       if($request->small_meal==0 && $request->medium_meal==0 && $request->large_meal==0 ){
        return back();
       }
       if($request->small_meal<0 || $request->medium_meal<0 || $request->large_meal<0 ){
        return back();
       }
       Order::create([
        'user_id'=>auth()->user()->id,
        'meal_id'=>$request->meal_id,
        // 'date'=>$request->date,
        // 'time'=>$request->time,
        'phone'=>$request->phone,
        'small_meal'=>$request->small_meal,
        'medium_meal'=>$request->medium_meal,
        'large_meal'=>$request->large_meal,
        'body'=>$request->body,
       ]);
       return redirect()->route('homepage.indexhome');
    }



    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
     if ( $order->status =='pending') {
       return view('admin.orderedit', compact('order') );
     }
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {

        $order->phone= $request->phone;
        $order->small_meal= $request->small_meal;
        $order->medium_meal= $request->medium_meal;
        $order->large_meal= $request->large_meal;
        $order->body= $request->body;
        $order->save();
        return redirect()->route('adminorder.index');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $orders=Order::all();

        Order::where('status','completed')->delete();
        return back();
        // return view('admin.orders',compact('orders') );
    }

    public function changeStuatas(Request $request, Order $order)
    {
        $order->update([
            'status'=>$request->status
        ]);
        return back();
    }
}
