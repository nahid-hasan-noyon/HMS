@extends('layouts.BackEnd.master')

@push('css')

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css')}}">

@endpush

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
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
            <form action="{{route('user.update', auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("patch")
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" data-validation="required">
                </div>

                <div class="form-group col-md-6">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" value="{{ $user->email }}" name="email" data-validation="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Password:</label>
                    <input type="password" class="form-control" name="password" data-validation="required">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirmation" data-validation="required">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success btn-lg float-right"><i class="icon-copy dw dw-paper-plane" style="font-family:dropways, Bangla945, sans-serif;"></i>Update</button>
                </div>
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
        });
    </script>
@endpush