@extends('layouts.BackEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h4 class="text-warning text-center p-3">Student Profile</h4>
            <span class="user-icon">
                <img class="rounded-circle border-warning mx-auto d-block" src="{{asset('files\student\image').'/'.$student->image }}" alt="" style="border:1px solid #d3232e;">
            </span>
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
                    <tr class="table-dark text-dark">
                        <td>Present Address: </td>
                        <td>{{$student->present_address}}</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Permanent Address: </td>
                        <td>{{$student->permanent_address}}</td>
                    </tr>
                    <tr class="table-primary">
                        <td>Hostel Seat Number: </td>
                        <td>{{$student->hostelSeat->floor.'-'.$student->hostelSeat->flat.'-'.$student->hostelSeat->seatNumber}}</td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-link float-right" href="{{ route('student-meal.view', $student->studentID) }}" role="button"><u>View Meal History</u></a>
        </div>
    </div>
</div>
@endsection

@push('js')
	<!-- buttons for Export datatable -->
	<script src="{{asset('src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{asset('vendors/scripts/datatable-setting.js')}}"></script></body>
@endpush