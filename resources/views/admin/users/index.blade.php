@extends('layouts.admin')
@section('content')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Users</h4>
                    <div class="table-responsive">
                        <button type="button" onclick="location.href = '{{ route('users.create') }}'" style="float: right; margin-bottom: 10px;" class="btn waves-effect waves-light btn-success text-white"><i class="fas fa-check"></i> Create User</button>

                        <table class="table table-bordered yajra-datatable">
                            <thead>
                            <tr>
                                <th>Station</th>
                                <th>Fullname</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function () {

            var table = $('.yajra-datatable').DataTable({
                order: [0, 'asc'],
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.list') }}",
                columns: [
                    {data: 'station_name', name: 'station_name'},
                    {data: 'fullname', name: 'fullname'},
                    {data: 'position', name: 'position'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>
@endsection