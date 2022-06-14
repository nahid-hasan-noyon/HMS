@extends('layouts.BackEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <Table class="table table-striped">
                <thead>
                    <th>Title</th>
                    <th>Data</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{auth()->user()->name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{auth()->user()->email}}</td>
                    </tr>
                </tbody>
            </Table>
        </div>
    </div>
</div>  
@endsection