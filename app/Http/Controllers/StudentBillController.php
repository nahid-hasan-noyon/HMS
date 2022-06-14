<?php

namespace App\Http\Controllers;

use App\Models\BookMeal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MonthlyBill;

class StudentBillController extends Controller
{
   public function view(){
    $studentID = session()->get('studentID');
    //fore january 1
    $meals_janury = BookMeal::where('studentID',$studentID)->whereMonth('date',1)->whereYear('date',date('Y'))->get();
    $jatotal = $meals_janury->sum('breakfast_price')+$meals_janury->sum('lunch_price')+$meals_janury->sum('dinner_price');
   //fore feb 2
    $meals_feb= BookMeal::where('studentID',$studentID)->whereMonth('date',2)->whereYear('date',date('Y'))->get();
    $ftotal = $meals_feb->sum('breakfast_price')+$meals_feb->sum('lunch_price')+$meals_feb->sum('dinner_price');
    //fore march 3
    $meals_march = BookMeal::where('studentID',$studentID)->whereMonth('date',3)->whereYear('date',date('Y'))->get();
    $martotal = $meals_march->sum('breakfast_price')+$meals_march->sum('lunch_price')+$meals_march->sum('dinner_price');
   //fore april 4
    $meals_april = BookMeal::where('studentID',$studentID)->whereMonth('date',4)->whereYear('date',date('Y'))->get();
    $aptotal = $meals_april->sum('breakfast_price')+$meals_april->sum('lunch_price')+$meals_april->sum('dinner_price');
   //fore may 5
    $meals_may = BookMeal::where('studentID',$studentID)->whereMonth('date',5)->whereYear('date',date('Y'))->get();
    $mtotal = $meals_may->sum('breakfast_price')+$meals_may->sum('lunch_price')+$meals_may->sum('dinner_price');
   //fore june 6
    $meals_june= BookMeal::where('studentID',$studentID)->whereMonth('date',6)->whereYear('date',date('Y'))->get();
    $junetotal = $meals_june->sum('breakfast_price')+$meals_june->sum('lunch_price')+$meals_june->sum('dinner_price');

    //fore july 7
    $meals_july = BookMeal::where('studentID',$studentID)->whereMonth('date',7)->whereYear('date',date('Y'))->get();
    $julytotal = $meals_july->sum('breakfast_price')+$meals_july->sum('lunch_price')+$meals_july->sum('dinner_price');

    //fore august 8
    $meals_august = BookMeal::where('studentID',$studentID)->whereMonth('date',8)->whereYear('date',date('Y'))->get();
    $augtotal = $meals_august->sum('breakfast_price')+$meals_august->sum('lunch_price')+$meals_august->sum('dinner_price');

    //fore september 9
    $meals_september= BookMeal::where('studentID',$studentID)->whereMonth('date',9)->whereYear('date',date('Y'))->get();
    $septotal = $meals_september->sum('breakfast_price')+$meals_september->sum('lunch_price')+$meals_september->sum('dinner_price');
    
    //fore october 10
    $meals_october = BookMeal::where('studentID',$studentID)->whereMonth('date',10)->whereYear('date',date('Y'))->get();
    $octototal = $meals_october->sum('breakfast_price')+$meals_october->sum('lunch_price')+$meals_october->sum('dinner_price');

    //fore november 11
    $meals_november = BookMeal::where('studentID',$studentID)->whereMonth('date',11)->whereYear('date',date('Y'))->get();
    $novtotal = $meals_november->sum('breakfast_price')+$meals_november->sum('lunch_price')+$meals_november->sum('dinner_price');

    //fore december 12
    $meals_december = BookMeal::where('studentID',$studentID)->whereMonth('date',12)->whereYear('date',date('Y'))->get();
    $dectotal = $meals_december->sum('breakfast_price')+$meals_december->sum('lunch_price')+$meals_december->sum('dinner_price');

   $otherbills = MonthlyBill::get();

   return view('FrontEnd.MonthlyBill.view', compact('jatotal','ftotal','martotal','aptotal','mtotal','junetotal','julytotal','augtotal','septotal','octototal','novtotal','dectotal','otherbills'));
   }
}
