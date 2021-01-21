@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
{{--                    <h1 class="m-0">Permission</h1>--}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Roles</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card container">
                        <div class="card-header">
                            <h3 class="card-title">Roles Permission</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-striped table-bordered display">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role=>$row)
                                    <tr>
                                        <td>{{ $role+1 }}</td>
                                       <td>{{ $row->name }}</td>
                                       <td>
                                           -
                                       </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('css')
    /*<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">*/
/*    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.dataTables.min.css">*/
/*    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">*/
/*    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">*/
/*    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.3/css/scroller.dataTables.min.css">*/

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/af-2.3.5/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/sb-1.0.1/datatables.min.css"/>
@endsection

@section('script')
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>--}}
{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/scroller/2.0.3/js/dataTables.scroller.min.js"></script>--}}


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/af-2.3.5/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/sb-1.0.1/datatables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endsection


