@extends('layouts.backEnd.master')

@section('content')
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('hostel-meal.update', $meal->id) }}" method="post">
                @csrf
                @method("PATCH")
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Meal Day:</label>
                            <input type="text" class="form-control" name="day" value="{{ $meal->day }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Meal Type:</label>
                            <input type="text" class="form-control" name="meal_type" value="{{ $meal->meal_type }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Meal Items:</label>
                            <input type="text" class="form-control" name="meal_item" value="{{ $meal->meal_item }}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Meal Price:</label>
                            <input type="number" class="form-control" name="price" value="{{ $meal->price }}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success btn-md float-right">
                                <i class="icon-copy dw dw-checked" style="font-family: dropways, Bangla526, sans-serif;"></i> Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

