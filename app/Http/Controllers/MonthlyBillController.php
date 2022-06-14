<?php

namespace App\Http\Controllers;

use App\Models\HostelMeal;
use App\Models\MonthlyBill;
use Illuminate\Http\Request;

class MonthlyBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills=MonthlyBill::all();
        return view('BackEnd.prerequisite.bills.monthly.index',compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        MonthlyBill::create($request->all());
        toast('Bill Added Successfully', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MonthlyBill  $monthlyBill
     * @return \Illuminate\Http\Response
     */
    public function show(MonthlyBill $monthlyBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonthlyBill  $monthlyBill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill=MonthlyBill::find($id);
        return view('BackEnd.prerequisite.bills.monthly.edit',compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MonthlyBill  $monthlyBill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        MonthlyBill::find($id)->update($request->all());
        toast('Bill Updated Successfully','success');
        return redirect()->route('monthly-bills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MonthlyBill  $monthlyBill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MonthlyBill::destroy($id);
        toast('Bill Deleted Successfully','success');
        return redirect()->back();
    }
}
