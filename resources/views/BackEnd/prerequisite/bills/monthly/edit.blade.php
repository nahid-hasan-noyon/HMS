@extends('layouts.backEnd.master')

@section('content')
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('monthly-bills.update', $bill->id) }}" method="post">
                    @csrf
                    @method("PATCH")
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Title:</label>
                            <input type="text" class="form-control" name="title" value="{{$bill->title}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Type:</label>
                            <select name="type" class="form-control" id="" required>
                                <option value="fixed">Fixed</option>
                                <option value="variable">Variable</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Amount:</label>
                            <input type="number" class="form-control" name="amount" value="{{$bill->amount}}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success btn-md float-right">
                                <i class="icon-copy dw dw-checked" style="font-family: dropways, Bangla526, sans-serif;"></i>Update Bill
                            </button>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
@endsection

