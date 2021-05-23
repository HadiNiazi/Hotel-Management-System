@extends('layouts.publisher')

@section('multi-select-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
      <span class="text-muted font-weight-light">Listing /</span> Create Listing
    </h4>


    <div class="card mb-4">
      <h4 class="card-header">
        Listing
      </h4>

      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('error-alert'))
        <div class="alert alert-danger">
            {{ Session::get('error-alert')}}
          </div>
        @endif

      <div class="card-body">
      <form method="POST" action="{{ route('listing.store') }}" enctype="multipart/form-data">
        @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label class="form-label">City & Address</label>
              <input type="text" name="cityAddress" value="{{ old('cityAddress') }}" class="form-control @error('cityAddress') is-invalid @enderror" placeholder="City & Address">
              @error('cityAddress')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>

          <div class="form-row">

            <div class="form-group col-md-6">
                <label class="form-label">Existing Roommates</label>
                <select id="existing_roommates" name="existing_roommates" class="selectpicker form-control" multiple data-live-search="true">
                    @foreach (roommates() as $roommate)
                    <option @if (old('existing_roommates') == $roommate->id) selected @endif value="{{ $roommate->id }}">{{ $roommate->username }}</option>
                    @endforeach
                  </select>
              @error('existing_roommates')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group col-md-6">
                <label class="form-label">Elevator</label>
                <select name="elevator" value="{{ old('elevator') }}" class="form-control @error('elevator') is-invalid @enderror">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                @error('elevator')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">Parking</label>
              <select name="parking" value="{{ old('parking') }}" class="form-control @error('parking') is-invalid @enderror">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
              </select>
              @error('parking')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group col-md-6">
                <label class="form-label">Furniture</label>
                <select name="furniture" value="{{ old('furniture') }}" class="form-control @error('furniture') is-invalid @enderror">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                @error('furniture')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
          </div>


    <!--  Second section -->
    <hr>
    <div class="mb-4">
        <h4>Bedroom Details</h4>
        <hr>
        <div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="form-label">Ac</label>
                  <select name="ac" value="{{ old('ac') }}" class="form-control @error('ac') is-invalid @enderror">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                  </select>
                  @error('ac')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label">Furniture</label>
                    <select name="bedroom_furniture" id="isFurniture" value="{{ old('bedroom_furniture') }}" class="form-control @error('bedroom_furniture') is-invalid @enderror">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                    @error('bedroom_furniture')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
              </div>

              <div class="form-row" id="showFurnitureDetail">
                <div class="form-group col-md-12">
                    <label class="form-label">Furniture Detail</label>
                    <input type="text" name="furniture_detail" value="{{ old('furniture_detail') }}" class="form-control @error('furniture_detail') is-invalid @enderror" placeholder="Furniture Detail">
                    @error('furniture_detail')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-label">How Many Bedroom</label>
                    <select name="total_bedroom" value="{{ old('total_bedroom') }}" class="form-control @error('total_bedroom') is-invalid @enderror">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="0">Don't Care</option>
                    </select>
                    {{-- @error('total_bedroom')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror --}}
                  </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="form-label">SqM</label>
                  <input type="number" name="sqm" value="{{ old('sqm') }}" class="form-control @error('sqm') is-invalid @enderror" placeholder="Enter SqM">
                  @error('sqm')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price">
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
        </div>
      </div>

      <!--Third section photo and video -->
      <hr>
    <div class="mb-4">
        <h4>Kitchen</h4>
        <hr>
        <div>

            <div class="form-row">

                <div class="form-group col-4 col-sm-12 col-xs-12 col-md-4 col-lg-4">
                    <label class="form-label"><strong>#BR1</strong></label><br>
                    <input type="file" name="kitchen_br1" value="{{ old('kitchen_br1') }}" class="form-control @error('kitchen_br1') is-invalid @enderror" id="preview_kitchen_br1">
                    <img class="mt-3" src="https://via.placeholder.com/150" id="selected_kitchen_br1" width="200px" height="200" />
                    @error('kitchen_br1')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label class="form-label"><strong>#BR2</strong></label><br>
                    <input type="file" name="kitchen_br2" value="{{ old('kitchen_br2') }}" class="form-control @error('kitchen_br2') is-invalid @enderror" id="preview_kitchen_br2">
                    <img class="mt-3" src="https://via.placeholder.com/150" id="selected_kitchen_br2" width="200px" height="200" />
                    @error('kitchen_br2')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label class="form-label"><strong>#BR3</strong></label><br>
                    <input type="file" name="kitchen_br3" value="{{ old('kitchen_br3') }}" class="form-control @error('kitchen_br3') is-invalid @enderror" id="preview_kitchen_br3">
                    <img class="mt-3" src="https://via.placeholder.com/150" id="selected_kitchen_br3" width="200px" height="200" />
                    @error('kitchen_br3')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
      </div>


       <!--Fourth section photo and video -->
       <hr>
       <div class="mb-4">
           <h4>Bedroom</h4>
           <hr>
           <div>

               <div class="form-row">

                   <div class="form-group col-4 col-sm-12 col-xs-12 col-md-4 col-lg-4">
                       <label class="form-label"><strong>#BR1</strong></label><br>
                       <input type="file" name="bedroom_br1" value="{{ old('bedroom_br1') }}" class="form-control @error('bedroom_br1') is-invalid @enderror" id="preview_bedroom_br1">
                       <img class="mt-3" src="https://via.placeholder.com/150" id="selected_bedroom_br1" width="200px" height="200" />
                       @error('bedroom_br1')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                       <label class="form-label"><strong>#BR2</strong></label><br>
                       <input type="file" name="bedroom_br2" value="{{ old('bedroom_br2') }}" class="form-control @error('bedroom_br2') is-invalid @enderror" id="preview_bedroom_br2">
                       <img class="mt-3" src="https://via.placeholder.com/150" id="selected_bedroom_br2" width="200px" height="200" />
                       @error('bedroom_br2')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                       <label class="form-label"><strong>#BR3</strong></label><br>
                       <input type="file" name="bedroom_br3" value="{{ old('bedroom_br3') }}" class="form-control @error('bedroom_br3') is-invalid @enderror" id="preview_bedroom_br3">
                       <img class="mt-3" src="https://via.placeholder.com/150" id="selected_bedroom_br3" width="200px" height="200" />
                       @error('bedroom_br3')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                   </div>
               </div>

           </div>
         </div>


          <!--Fifth section photo and video -->
      <hr>
      <div class="mb-4">
          <h4>Bathroom</h4>
          <hr>
          <div>

              <div class="form-row">

                  <div class="form-group col-4 col-sm-12 col-xs-12 col-md-4 col-lg-4">
                      <label class="form-label"><strong>#BR1</strong></label><br>
                      <input type="file" name="bathroom_br1" value="{{ old('bathroom_br1') }}" class="form-control @error('bathroom_br1') is-invalid @enderror" id="preview_bathroom_br1">
                      <img class="mt-3" src="https://via.placeholder.com/150" id="selected_bathroom_br1" width="200px" height="200" />
                      @error('bathroom_br1')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                      <label class="form-label"><strong>#BR2</strong></label><br>
                      <input type="file" name="bathroom_br2" value="{{ old('bathroom_br2') }}" class="form-control @error('bathroom_br2') is-invalid @enderror" id="preview_bathroom_br2">
                      <img class="mt-3" src="https://via.placeholder.com/150" id="selected_bathroom_br2" width="200px" height="200" />
                      @error('bathroom_br2')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                      <label class="form-label"><strong>#BR3</strong></label><br>
                      <input type="file" name="bathroom_br3" value="{{ old('bathroom_br3') }}" class="form-control @error('bathroom_br3') is-invalid @enderror" id="preview_bathroom_br3">
                      <img class="mt-3" src="https://via.placeholder.com/150" id="selected_bathroom_br3" width="200px" height="200" />
                      @error('bathroom_br3')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>

          </div>
        </div>


         <!--Six section photo and video -->
      <hr>
      <div class="mb-4">
          <h4>Living Room</h4>
          <hr>
          <div>

              <div class="form-row">

                  <div class="form-group col-4 col-sm-12 col-xs-12 col-md-4 col-lg-4">
                      <label class="form-label"><strong>#BR1</strong></label><br>
                      <input type="file" name="living_room_br1" value="{{ old('living_room_br1') }}" class="form-control @error('living_room_br1') is-invalid @enderror" id="preview_living_room_1">
                      <img class="mt-3" src="https://via.placeholder.com/150" id="selected_living_room_br1" width="200px" height="200" />
                      @error('living_room_br1')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                      <label class="form-label"><strong>#BR2</strong></label><br>
                      <input type="file" name="living_room_br2" value="{{ old('living_room_br2') }}" class="form-control @error('living_room_br2') is-invalid @enderror" id="preview_living_room_2">
                      <img class="mt-3" src="https://via.placeholder.com/150" id="selected_living_room_br2" width="200px" height="200" />
                      @error('living_room_br2')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                      <label class="form-label"><strong>#BR3</strong></label><br>
                      <input type="file" name="living_room_br3" value="{{ old('living_room_br3') }}" class="form-control @error('living_room_br3') is-invalid @enderror" id="preview_living_room_3">
                      <img class="mt-3" src="https://via.placeholder.com/150" id="selected_living_room_br3" width="200px" height="200" />
                      @error('living_room_br3')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
              </div>

          </div>
        </div>


         <!--Seven section photo and video -->
      <hr>
      <div class="mb-4">
          <h4>General</h4><hr>
          <div>

              <div class="form-row">

                  <div class="form-group">
                      <label class="form-label"><strong>#BR1</strong></label><br>
                      <input type="file" name="general_br1" value="{{ old('general_br1') }}" class="form-control @error('general_br1') is-invalid @enderror" id="preview_general_br1">
                      <img class="mt-3" src="https://via.placeholder.com/150" id="selected_general_br1" width="200px" height="200" />
                      @error('general_br1')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

              </div>

              <div class="form-row">
                <label class="mt-3"><strong>Room Video</strong></label><br>
                <input type="file" name="video" value="{{ old('video') }}" class="form-control @error('video') is-invalid @enderror">
                @error('video')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

              <button type="submit" class="btn btn-primary mt-4 mb-2">Create List</button>
          </div>
        </div>

@endsection

@section('image-preview')
<script>

    $(document).ready(function(){

        $('select').selectpicker();
        $("#showFurnitureDetail").hide();

        $('#isFurniture').on('change', function () {
            $("#showFurnitureDetail").css('display', (this.value == '1') ? '' : 'none');
        });

    //Kitchen Preview
            function readKitchenBr1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_kitchen_br1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_kitchen_br1").change(function(){
            readKitchenBr1(this);
        });

        function readKitchenBr2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_kitchen_br2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_kitchen_br2").change(function(){
            readKitchenBr2(this);
        });

        function readKitchenBr3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_kitchen_br3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_kitchen_br3").change(function(){
            readKitchenBr3(this);
        });

    //Bedroom preview
        function readBedroomBr1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_bedroom_br1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_bedroom_br1").change(function(){
            readBedroomBr1(this);
        });

        function readBedroomBr2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_bedroom_br2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_bedroom_br2").change(function(){
            readBedroomBr2(this);
        });

        function readBedroomBr3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_bedroom_br3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_bedroom_br3").change(function(){
            readBedroomBr3(this);
        });

    //Bathroom Preview
        function readBathroomBr1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_bathroom_br1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_bathroom_br1").change(function(){
            readBathroomBr1(this);
        });

        function readBathroomBr2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_bathroom_br2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_bathroom_br2").change(function(){
            readBathroomBr2(this);
        });

        function readBathroomBr3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_bathroom_br3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_bathroom_br3").change(function(){
            readBathroomBr3(this);
        });

    //Living Room Preview
        function readLivingRoomBr1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_living_room_br1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_living_room_1").change(function(){
            readLivingRoomBr1(this);
        });

        function readLivingRoomBr2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_living_room_br2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_living_room_2").change(function(){
            readLivingRoomBr2(this);
        });

        function readLivingRoomBr3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_living_room_br3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_living_room_3").change(function(){
            readLivingRoomBr3(this);
        });

    //General Image Preview

        function readGeneralBr1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#selected_general_br1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview_general_br1").change(function(){
            readGeneralBr1(this);
        });

    });
</script>
@endsection
