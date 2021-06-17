@extends('layouts.admin')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Blotters</h4>
                    <h6 class="card-subtitle">per region</h6>
                    <div class="table-responsive">
                        <table class="table user-table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Control #</th>
                                    <th class="border-top-0">First Name</th>
                                    <th class="border-top-0">Last Name</th>
                                    <th class="border-top-0">Middle Intial</th>
                                    <th class="border-top-0">Type of Report</th>
                                    <th class="border-top-0">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>119087992</td>
                                    <td>Deshmukh</td>
                                    <td>Prohaska</td>
                                    <td>E</td>
                                    <td>Murder</td>
                                    <td>
                                        <a href="?page=details" class="btn btn-success text-white">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>119087993</td>
                                    <td>Deshmukh</td>
                                    <td>Gaylord</td>
                                    <td>D</td>
                                    <td>Murder</td>
                                    <td>
                                        <a href="?page=details" class="btn btn-success text-white">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>119087994</td>
                                    <td>Sanghani</td>
                                    <td>Gusikowski</td>
                                    <td>G</td>
                                    <td>Murder</td>
                                    <td>
                                        <a href="?page=details" class="btn btn-success text-white">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>119087995</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>A</td>
                                    <td>Robbery</td>
                                    <td>
                                        <a href="?page=details" class="btn btn-success text-white">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>119087996</td>
                                    <td>Joshi</td>
                                    <td>Hickle</td>
                                    <td>R</td>
                                    <td>Robbery</td>
                                    <td>
                                        <a href="?page=details" class="btn btn-success text-white">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>119087997</td>
                                    <td>Nigam</td>
                                    <td>Eichmann</td>
                                    <td>W</td>
                                    <td>Murder</td>
                                    <td>
                                        <a href="?page=details" class="btn btn-success text-white">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection