@extends('layouts.FrontEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h3 class="text-info text-center pd-10"><u>Monthly Bills</u></h3>
            <table class="table hover data-table-export nowrap">
                <thead>
                  <tr> 
                    <td>Month</td>
                    <td>Meal Bill</td>
                    @foreach ($otherbills as $item)
                        <td>{{$item->title}}</td>
                        @endforeach
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>January</td>
                        <td>{{$jatotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>February</td>
                        <td>{{$ftotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr>    
                    <tr>
                        <td>March</td>
                        <td>{{$martotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>April</td>
                        <td>{{$aptotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>May</td>
                        <td>{{$mtotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>June</td>
                        <td>{{$junetotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>July</td>
                        <td>{{$julytotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>August</td>
                        <td>{{$augtotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>September</td>
                        <td>{{$septotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>October</td>
                        <td>{{$octototal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>November</td>
                        <td>{{$novtotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
                    </tr> 
                    <tr>
                        <td>December</td>
                        <td>{{$dectotal}}</td>
                        @foreach ($otherbills as $item)
                        <td>{{$item->amount}}</td>
                        @endforeach
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