@extends('layouts.BackEnd.master')

@section('content')
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h3 class="text-info text-center pd-10"><u>Student List</u></h3>
                <table class="table hover data-table-export nowrap">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Guardian Nubmer</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        @if ($student->active==1)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->studentID }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->guardianPhone }}</td>
                            <td>{{ $student->status }}</td>
                            <td>
                                <a href="{{ route('student-information.download',$student->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="download-student-info"><i class="icon-copy dw dw-download"></i></a>
                                <a href="{{route('student-information.show', $student->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="View"><i class="icon-copy fi-torsos-female-male"></i></a>
                                <a href="{{route('student-information.edit', $student->id)}}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="icon-copy dw dw-edit-1"></i></a>
                                <a href="{{ route('student-information.destroy',$student->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="icon-copy dw dw-trash1"></i></a>
                            </td>
                        </tr>
                        @endif
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
