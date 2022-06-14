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
            <form action="{{ route('student-information.update', $student->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Student ID:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="studentID" data-validation="required" value="{{$student->studentID}}">
                </div>
            <div class="form-group col-md-6">
                <label for="">Student Name:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" data-validation="required" value="{{$student->name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Department:<span class="text-danger">*</span></label>
                <select name="department" class="form-control" data-validation="required">
                    <option selected>Choose...</option>
                    <option value="cse">CSE</option>
                    <option value="eee">EEE</option>
                    <option value="ce">CE</option>
                    <option value="bba">BBA</option>
                    <option value="engh">English</option>
                    <option value="llb">LLB</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Gender:<span class="text-danger">*</span></label>
                <select name="gender" class="form-control" data-validation="required">
                    <option selected>Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Student Email:</label>
                <input type="text" class="form-control" name="email" data-validation="email" data-validation-optional="true" value="{{$student->email}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Date of Birth:<span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="dob" data-validation="required" value="{{$student->dob}}">
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Student Phone Number:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" data-validation="required" value="{{$student->phone }}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Guardian Phone Number:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="guardianPhone" data-validation="required" value="{{$student->guardianPhone}}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Present Address:</label>
                <textarea name="present_address" class="form-control" data-validation="required" value="">
                    {{$student->address}}
                </textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="">Permanent Address:</label>
                <textarea name="permanent_address" class="form-control" data-validation="required" value="">
                    {{$student->address}}
                </textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="">Seat Number:<span class="text-danger">*</span></label>
                <select class="custom-select2 form-control" style="width: 100%; height: 38px;" name="seatNumber" data-validation="required" placeholder='Select a Value'>
                    @foreach ($hostelSeats as $hostelSeat)
                        @php
                            $check = App\Models\StudentInformation::where('seatNumber', $hostelSeat->id)->exists();
                        @endphp
                        <option @if ($check && $student->seatNumber != $hostelSeat->id)
                            disabled
                        @endif @if ($check && $student->seatNumber==$hostelSeat->id)
                            selected
                        @endif value="{{$hostelSeat->id}}">{{$hostelSeat->floor.' - '.$hostelSeat->flat.' - '.$hostelSeat->seatNumber}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Status:<span class="text-danger">*</span></label>
                <input type="text" value="Active" class="form-control text-success" name="status" data-validation="required">
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-success btn-md float-right " type="submit"><i class="icon-copy dw dw-up-arrow-11"></i>Update</button>
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
            allowClear: true
        });
    });
    </script>
@endpush
