@extends('layouts.FrontEnd.master');
@section('content')
    <div class="row">
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
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header text-primary ">Update your Information</h5>
                <div class="card-body">
                    <form action="{{route('student.update.image')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Change your photo:(150px X 150px)</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary"><i class="fa fa-refresh"></i> Update Photo</button>
                        </div> 
                    </form>
                    <form action="{{route('student.update.password', $student->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Old Password</label>
                            <input type="password" class="form-control" name="current_password">
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" class="form-control" name="new_password">
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="">New Confirm Password</label>
                            <input type="password" class="form-control" name="new_confirm_password">
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary"><i class="fa fa-refresh"></i> Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
