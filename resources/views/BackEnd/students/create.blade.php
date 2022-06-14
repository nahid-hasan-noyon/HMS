@extends('layouts.BackEnd.master')
@push('css')

<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css')}}">

@endpush
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <p><span class="text-danger">*</span> field are mendatory</p>
        <div class="col-md-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="col-md-12">
            <form action="{{ route('student-information.store')}}" method="POST">
            @csrf
            <input type="hidden" name="active" value="1">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Student ID:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="studentID" data-validation="required" value="{{old('studentID')}}">
                </div>
            <div class="form-group col-md-6">
                <label for="">Student Name:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" data-validation="required" value="{{old('name')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Department:<span class="text-danger">*</span></label>
                <select name="department" class="form-control" data-validation="required" value="{{old('Department')}}">
                    <option selected>Choose...</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="CE">CE</option>
                    <option value="BBA">BBA</option>
                    <option value="English">English</option>
                    <option value="LLB">LLB</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Gender:<span class="text-danger">*</span></label>
                <select name="gender" class="form-control" data-validation="required" value="{{old('gender')}}">
                    <option selected>Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Student Email:</label>
                <input type="text" class="form-control" name="email" data-validation="email" data-validation-optional="true" value="{{old('email')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Date of Birth:<span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="dob" data-validation="required" value="{{old('dob')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Student Phone Number:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" data-validation="required" value="{{old('phone')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Guardian Phone Number:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="guardianPhone" data-validation="required" value="{{old('guardianPhone')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Present Address:</label>
                <textarea name="present_address" class="form-control" cols="20" rows="10" data-validation="required">
                </textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="">Permanent Address:</label>
                <textarea name="permanent_address" class="form-control" cols="20" rows="10" data-validation="required">
                </textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="">Seat Number:<span class="text-danger">*</span></label>
                <select class="custom-select2 form-control" style="width: 100%; height: 38px;" name="seatNumber" data-validation="required" placeholder='Select a Value'>
                    <option value="" selected disabled>Please select</option>
                    @foreach ($hostelSeats as $hostelSeat)
                        <option value="{{$hostelSeat->id}}">{{$hostelSeat->floor.'-'.$hostelSeat->flat.'-'.$hostelSeat->seatNumber}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Status:<span class="text-danger">*</span></label>
                <input type="text" value="Active" class="form-control text-success" name="status" data-validation="required" readonly>
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-success btn-md float-right " type="submit"><i class="icon-copy dw dw-add-user"></i>Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $.validate();
            $(".custom-select2").select2({
            placeholder: "Select a value",
            allowClear: true
        });
    });
    </script>
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
