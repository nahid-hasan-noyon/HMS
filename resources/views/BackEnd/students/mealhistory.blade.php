@extends('layouts.BackEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h3 class="text-info text-center pd-10"><u>Meal History</u></h3>
            <table class="table hover data-table-export nowrap">
                <thead>
                    <tr>
                      <th>Date</th>
                      <th>Breafast<br>Quantity</th>
                      <th>Breafast<br>Price</th>
                      <th>Lunch<br>Quantity</th>
                      <th>Lunch<br>Price</th>
                      <th>Dinner<br>Quantity</th>
                      <th>Dinner<br>Price</th>
                      <th>Total</th>
                      <th>Comments</th>
                    </tr>
                  </thead>
                <tbody>
                    @foreach ($student->hostel_meals  as $item)
                    <tr>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->breakfast_quantity }}</td>
                        <td>{{ $item->breakfast_price }}</td>
                        <td>{{ $item->lunch_quantity }}</td>
                        <td>{{ $item->lunch_price }}</td>
                        <td>{{ $item->dinner_quantity }}</td>
                        <td>{{ $item->dinner_price }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->comments }}</td>
                    </tr>   
                    @endforeach
                    <tr>
                        <td colspan="7" class="text-right">Total:</td>
                        <td colspan="2">{{$student->hostel_meals->sum('total')}}</td>
                    </tr>
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