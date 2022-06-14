<?php

namespace App\Http\Controllers;

use App\Models\BookMeal;
use Illuminate\Http\Request;
use App\Models\StudentInformation;

class MealHistoryController extends Controller
{
    public function show($student_id){
        $student=StudentInformation::with('hostel_meals')->where('studentID',$student_id)->first();
        // return $student;
        return view('BackEnd.students.mealhistory', compact("student"));
    }
}
