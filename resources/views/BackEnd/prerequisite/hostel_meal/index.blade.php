@extends('layouts.BackEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row">
        <div class="col-md-12">
            <a href="javascript:void(0)" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#add-meal-type">
                <i class="icon-copy dw dw-add" style="font-family: dropways, Bangla526, sans-serif;"></i>
                 Add Meal Type</a>
            <div class="modal fade bs-example-modal-lg" id="add-meal-type" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New Meal Type From Here</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('hostel-meal.store') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">Meal Day:</label>
                                            <input type="text" class="form-control" name="day" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Meal Type:</label>
                                            <input type="text" class="form-control" name="meal_type" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Meal Items:</label>
                                            <input type="text" class="form-control" name="meal_item" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Meal Price:</label>
                                            <input type="number" class="form-control" name="price" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-success btn-md float-right">
                                                <i class="icon-copy dw dw-add" style="font-family: dropways, Bangla526, sans-serif;"></i> Add meal
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-12">
            <h3 class="text-info text-center pd-10"><u>Hostel Meal</u></h3>
            <table class="table hover data-table-export nowrap">
                <thead>
                  <tr>
                    <td>#</td>
                    <td>Day</td>
                    <td>Meal Type</td>
                    <td>Meal Item</td>
                    <td>Price</td>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($meals  as $meal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $meal->day }}</td>
                        <td>{{ $meal->meal_type }}</td>
                        <td>{{ $meal->meal_item }}</td>
                        <td>{{ $meal->price }}</td>
                        <td>
                            <a href="{{ route('hostel-meal.edit',$meal->id) }}" class="btn btn-warning btn-md" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-copy dw dw-edit-1" style="font-family: dropways, Bangla791, sans-serif;"></i></a>
                            <a href="{{ route('hostel-meal.destroy',$meal->id) }}" class="btn btn-danger btn-md" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure to delete this item from the list?')"><i class="icon-copy dw dw-trash1" style="font-family: dropways, Bangla791, sans-serif;"></i></a>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
              </table>
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