@extends('layouts.BackEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row">
        <div class="col-md-12">
            <a href="javascript:void(0)" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#add-meal-type">
                <i class="icon-copy dw dw-add" style="font-family: dropways, Bangla526, sans-serif;"></i>
                 Add Hostel Seat</a>
            <div class="modal fade bs-example-modal-lg" id="add-meal-type" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New Hostel Seat From Here</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('hostel-seats.store') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">Floor:</label>
                                            <input type="text" class="form-control" name="floor" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Flat:</label>
                                            <input type="text" class="form-control" name="flat" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Seat Number:</label>
                                            <input type="text" class="form-control" name="seatNumber" required>
                                        </div>
                                        <input type="hidden" name="status" value="0">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-success btn-md float-right">
                                                <i class="icon-copy dw dw-add" style="font-family: dropways, Bangla526, sans-serif;"></i> Add Hostel Seat
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
            <h3 class="text-info text-center pd-10">Hostel Seats</h3>
            <table class="checkbox-datatable table table-striped text-center">
                <thead>
                    <tr>
                        <th>
                            <div class="dt-checkbox">
                                <input type="checkbox" name="select_all" value="1" id="example-select-all">
                                <span class="dt-checkbox-label"></span>
                            </div>
                        </th>
                        <th>#</th>
                        <th>Floor</th>
                        <th>Flat</th>
                        <th>Seat Number</th>
                        <th>Status</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hostelSeats as $hostelSeat)
                    <tr>
                        <td></td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $hostelSeat->floor }}</td>
                        <td>{{ $hostelSeat->flat }}</td>
                        <td>{{ $hostelSeat->seatNumber }}</td>
                        @if ($hostelSeat->status == '0')
                        <td class="text-success"><i class="icon-copy fa fa-check-circle" aria-hidden="true"></i>Seat
                            Available</td>
                        @else
                        <td class="text-danger"><i class="icon-copy ion-close-circled"></i>Seat Occupied</td>
                        @endif
                        <!-- <td>
                                <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Allocate"><i class="icon-copy dw dw-enter"></i></a>
                                <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Vacant"><i class="icon-copy dw dw-logout1"></i></a>

                            </td> -->
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
<script src="{{asset('vendors/scripts/datatable-setting.js')}}"></script>
@endpush
