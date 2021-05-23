@extends('layouts.publisher')

@section('content')
<h4 class="font-weight-bold py-3 mb-4">
    Existing Listing
</h4>

  <!-- Counters -->
  <div class="row">

    <div class="col-sm-6 col-xl-3 mb-4">
        <div class="card mb-4">
            <img src="{{ asset('images/publisher/hotel/home.png') }}" alt="">
        </div>
            <div class="text-center">
            <a href="" class="btn btn-primary">Edit</a>
            <a href=""   class="btn btn-danger">Delete</a>
            <a href=""  class="btn btn-warning">Freeze</a>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3 mb-4">
        <div class="card mb-4">
            <img src="{{ asset('images/publisher/hotel/home.png') }}" alt="">
        </div>
            <div class="text-center">
            <a href="" class="btn btn-primary">Edit</a>
            <a href=""   class="btn btn-danger">Delete</a>
            <a href=""  class="btn btn-warning">Freeze</a>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3 mb-4">
        <div class="card mb-4">
            <img src="{{ asset('images/publisher/hotel/home.png') }}" alt="">
        </div>
            <div class="text-center">
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
            <a href="" class="btn btn-warning">Freeze</a>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3 mb-4">
        <div class="card mb-4">
            <img src="{{ asset('images/publisher/hotel/home.png') }}" alt="">
        </div>
            <div class="text-center">
            <a href="" class="btn btn-primary">Edit</a>
            <a href=""   class="btn btn-danger">Delete</a>
            <a href=""  class="btn btn-warning">Freeze</a>
        </div>
    </div>

  </div>

@endsection
