@extends('layouts.BackEnd.master')
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h4 class="font-20 weight-500 mb-10 text-capitalize text-center">
                 <div class="weight-600 font-30 text-yellow">Welcome back {{auth()->user()->name}}!</div>
            </h4>
        </div>
    </div>
</div>
@endsection