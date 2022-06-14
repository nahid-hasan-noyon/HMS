@extends('layouts.FrontEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <span class="user-icon">
                <img class="rounded-circle border-warning mx-auto d-block" src="{{asset('files\student\image').'/'.$student->image }}" alt="" style="border:1px solid #d3232e;">
            </span>
            <h4 class="text-warning text-center p-3">{{$student->name}}</h4>
            <table class="table table-striped">
                <tbody>
                    
                    <tr class="table-active">
                        <td>Student ID: </td>
                        <td>{{$student->studentID }}</td>
                    </tr>
                    <tr class="table-primary">
                        <td >Student Name: </td>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Department: </td>
                        <td>{{$student->department}}</td>
                    </tr>
                    <tr class="table-success">
                        <td>Gender: </td>
                        <td>{{$student->gender}}</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Email: </td>
                        <td>{{$student->email}}</td>
                    </tr>
                    <tr class="table-danger">
                        <td>Date of Birth: </td>
                        <td>{{$student->dob}}</td>
                    </tr>
                    <tr class="table-info">
                        <td>Contact Number: </td>
                        <td>{{$student->phone }}</td>
                    </tr>
                    <tr class="table-light">
                        <td>Guardian Number: </td>
                        <td>{{$student->guardianPhone}}</td>
                    </tr>
                    <tr class="table-dark">
                        <td>Present Address:</td>
                        <td>{{$student->present_address}}</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Permenant Address:</td>
                        <td>{{$student->permanent_address}}</td>
                    </tr>
                    <tr class="table-primary">
                        <td>Hostel Seat Number: </td>
                        <td>{{$student->hostelSeat->floor.'-'.$student->hostelSeat->flat.'-'.$student->hostelSeat->seatNumber}}</td>
                    </tr>
                    <tr class="table-success">
                        <td>Status: </td>
                        <td>{{$student->status}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

