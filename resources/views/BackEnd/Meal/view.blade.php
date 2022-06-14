@extends('layouts.BackEnd.master')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <label for="">Select a Date:</label>
                <input type="date" class="form-control" name="date">
            </div>
        </div> 
    </div> 
<div class="row clearfix">
<div class="col-lg-4 col-md-8 col-sm-12 mb-30">
    <div class="card card-box">
        <img class="card-img-top" src="{{asset('src/images/breakfast.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h3 class="card-title weight-500">Breakfast</h3>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <button class="btn btn-success btn-md float-right " type="submit">Book</button>
    </div>
</div>
<div class="col-lg-4 col-md-8 col-sm-12 mb-30">
    <div class="card card-box">
        <img class="card-img-top" src="{{asset('src/images/lunch.jpg')}}" alt="Card image cap" style="width: 50 height:80">
        <div class="card-body">
            <h3 class="card-title weight-500">Lunch</h3>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <button class="btn btn-success btn-md float-right " type="submit">Book</button>
    </div>
</div>
<div class="col-lg-4 col-md-8 col-sm-12 mb-30">
    <div class="card card-box">
        <img class="card-img-top" src="{{asset('src/images/dinner.jpg')}}" alt="Card image cap"style="width: 50 height:80">
        <div class="card-body">
            <h3 class="card-title weight-500">Dinner</h3>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <button class="btn btn-success btn-md float-right " type="submit">Book</button>
    </div>
</div>
</div>
</div>
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h4 class="text-warning text-center p-3">Meal Table</h4>
            <table class="table table-success table-striped">
                <tr>
                    <td>Day</td>
                    <td>Meal Type</td>
                    <td>Meal Item</td>
                    <td>Price</td>
                </tr>
                @foreach ($meals as $meal)
                <tr>
                    <td>{{ $meal->day }}</td>
                    <td>{{ $meal->meal_type }}</td>
                    <td>{{ $meal->meal_item }}</td>
                    <td>{{ $meal->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection