<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\BookMeal;
use App\Models\HostelMeal;
use Illuminate\Http\Request;
use App\Models\StudentInformation;
use App\Http\Controllers\Controller;

class BookMealController extends Controller
{
   
    public function index()
    {
        return view('FrontEnd.Meal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findMeal(Request $request)
    {
        try {
            $dayName = Carbon::parse($request->date)->format('l');
            $mealList = HostelMeal::where('day',$dayName)->get();
            $date = $request->date;
            return view('FrontEnd.Meal.index',compact('mealList','date'));
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BookMeal::create($request->all());
        toast('Meal Booked Successfully', 'success');
        return redirect()->route('book-meal.show',session()->get('studentID'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student_id)
    {
        try {
            $studentMeals = StudentInformation::with('hostel_meals')->where('studentID',$student_id)->first();
            //return $stuentMeals;
            return view('FrontEnd.Meal.meal_bill',compact('studentMeals'));
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
