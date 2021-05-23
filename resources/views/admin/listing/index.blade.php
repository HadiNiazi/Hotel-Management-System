@extends('layouts.admin')

@section('datatable-css')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Listing</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Listing</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header text-center">
              <a href="" class="btn btn-warning mb-1">Jan</a>
              <a href="" class="btn btn-warning mb-1">Feb</a>
              <a href="" class="btn btn-warning mb-1">Mar</a>
              <a href="" class="btn btn-warning mb-1">April</a>
              <a href="" class="btn btn-warning mb-1">May</a>
              <a href="" class="btn btn-warning mb-1">June</a>
              <a href="" class="btn btn-warning mb-1">July</a>
              <a href="" class="btn btn-warning mb-1">Aug</a>
              <a href="" class="btn btn-warning mb-1">Sep</a>
              <a href="" class="btn btn-warning mb-1">Oct</a>
              <a href="" class="btn btn-warning mb-1">Nov</a>
              <a href="" class="btn btn-warning mb-1">Dec</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                  <th>Serial #</th>
                  <th>Address</th>
                  <th>Bedroom</th>
                  <th>Status</th>
                  <th>Photo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>01</td>
                  <td>Jerusalem</td>
                  <td>3</td>
                  <td>Published</td>
                  <td>Yes</td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Haifa</td>
                    <td>3</td>
                    <td>Published</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ashdod</td>
                    <td>12</td>
                    <td>Published</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Beersheba</td>
                    <td>8</td>
                    <td>Pending</td>
                    <td>Yes</td>
                </tr>
                {{-- <tfoot></tfoot> --}}
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
@endsection

@section('datatable-scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
