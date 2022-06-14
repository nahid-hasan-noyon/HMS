<?php

namespace App\Http\Controllers;

use App\Models\HostelMeal;
use Illuminate\Http\Request;

class HostelMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = HostelMeal::all();
        return view('BackEnd.prerequisite.hostel_meal.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals = HostelMeal::all();
        return view('BackEnd.Meal.view', compact('meals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        HostelMeal::create($request->all());
        toast('Meal added successfully','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mealShow($id)
    {
            return view('BackEnd.students.mealhistory');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal = HostelMeal::find($id);
        return view('backEnd.prerequisite.hostel_meal.edit', compact('meal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        HostelMeal::find($id)->update($request->all());
        toast('Meal updated successfully','success');
        return redirect()->route('hostel-meal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HostelMeal::destroy($id);
        toast('Meal item deleted successfully!','success');
        return redirect()->back();
    }
}
