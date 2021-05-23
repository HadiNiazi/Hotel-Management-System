@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Total Listing</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        <a href="{{ route('admin.listing') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Total Roommates</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ route('admin.roommate') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>
              <p>Potential Roommates</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


      <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-11 offset-md-1 col-lg-11 offset-lg-1">
            <a href="" class="btn btn-warning mt-1 ml-1">Jan</a>
            <a href="" class="btn btn-warning mt-1 ml-1">Feb</a>
            <a href="" class="btn btn-warning mt-1 ml-1">Mar</a>
            <a href="" class="btn btn-warning mt-1 ml-1">April</a>
            <a href="" class="btn btn-warning mt-1 ml-1">May</a>
            <a href="" class="btn btn-warning mt-1 ml-1">June</a>
            <a href="" class="btn btn-warning mt-1 ml-1">July</a>
            <a href="" class="btn btn-warning mt-1 ml-1">Aug</a>
            <a href="" class="btn btn-warning mt-1 ml-1">Sep</a>
            <a href="" class="btn btn-warning mt-1 ml-1">Oct</a>
            <a href="" class="btn btn-warning mt-1 ml-1">Nov</a>
            <a href="" class="btn btn-warning mt-1 ml-1">Dec</a>
          </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
