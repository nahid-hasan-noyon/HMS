<?php

namespace App\Http\Controllers\student;

use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\HostelSeat;
use Illuminate\Http\Request;
use App\Models\StudentInformation;
use App\Http\Controllers\Controller;

class StudentInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students = StudentInformation::orderBy('studentID','asc')->get();
        return view('BackEnd.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hostelSeats = HostelSeat::where('status','0')->orderBy('floor','asc')->get();
        return view('BackEnd.students.create', compact('hostelSeats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'studentID' => 'required|unique:student_information',
            'phone' => 'required|unique:student_information'

        ]);
        // return $request;
        StudentInformation::create($request->all());
        alert()->success('SuccessAlert','Student Added Successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=StudentInformation::with('hostelSeat')->find($id);
        //return $student;
        return view('BackEnd.students.view', compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=StudentInformation::find($id);
        $hostelSeats = HostelSeat::where('status','0')->orderBy('floor','asc')->get();
        return view('BackEnd.students.edit', compact("student","hostelSeats"));
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
        StudentInformation::where('id',$id)->update($request->except('_token','_method'));
        toast('Student Information updated successfully!','success');
        return redirect()->route('student-information.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentInformation::where('id',$id)->update(['active' => '0']);
        $student = StudentInformation::where('id',$id)->get();
        toast('Students Information Removed Successfully','success');
        return redirect()->back();
    }
    public function studentInformationDownload($studentID)
    {
        $students = StudentInformation::find($studentID);

        $pdf = PDF::loadView('BackEnd.students.download',['students' => $students]);
        return $pdf->download($students->studentID.'.pdf');

    }
}
