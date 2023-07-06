<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Order;
use App\Models\Category;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!$request->category_id){
           $meals=Meal::latest()->get();
           $categories=Category::all();
        return view('home.homepage', compact('meals','categories'));
        }
        else{
             $categories=Category::all();
             $meals=Meal::where('category_id', $request->category_id)->get();
             return view('home.homepage', compact('meals','categories'));
        }

        //
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {
        return view('home.details', compact('meal') );
    }
    public function order(Meal $meal)
    {
        $orders=Order::all();
        return view('home.order', compact('meal','orders') );
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
