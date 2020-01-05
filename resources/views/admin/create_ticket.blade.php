@extends('home')
@section('content1')

<div class="container-fluid" style="margin-top:-200px">
    <div class="row">


    <main role = 'main' class="col-md-9 ml-sm-auto col-lg-10">
        <div class="row mt">
            <div class="col-lg-12">

              <div class="form-panel">
                        @if(\Session::has('msg'))
            <div class = 'alert alert-success'>
              <p>{{ \Session::get('msg') }}</p>
            </div><br>
            @endif
            @if($errors->any())
            <div class = 'alert alert-danger'>
              <ul>
                @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
              </ul>
            </div>
            @endif
        <h3>Add Ticket</h3>
    <form action = '{{ url('ticket/create') }}' method = 'POST' enctype="multipart/form-data" style="width:900px">
              Flight Name : <input class="form-control" required type = 'text' value="{{ old('flight_name') }}" name = 'flight_name' />
              From :
              <select name="from" class="form-control" id="">
                <option value="Kathmandu">Kathmandu</option>
                <option value="Bhadrapur">Bhadrapur</option>
                <option value="Pokhara">Pokhara</option>
                <option value="Butwal">Butwal</option>
                <option value="Chitwan">Chitwan</option>
              </select>
              To :
              <select name="to" class="form-control" id="">
                <option value="Kathmandu">Kathmandu</option>
                <option value="Bhadrapur">Bhadrapur</option>
                <option value="Pokhara">Pokhara</option>
                <option value="Butwal">Butwal</option>
                <option value="Chitwan">Chitwan</option>
              </select>
              Price : <input class="form-control" required value="{{ old('price') }}" type = 'text' name = 'price' />
              Time : <input class="form-control" required type = 'time' value="{{ old('time') }}" name = 'time' />
              Date : <input class="form-control" required type = 'text' value="{{ old('date') }}" id="datepicker" name = 'date' />
              Upload Image: <input type="file" required class="form-control" name="image">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <br><input type = 'submit' class="btn btn-primary" value = 'Save'/>
              </form>

              </main>
            </div>
          </div>



      </main>
    </div>
  </div>
  <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker({
        showOtherMonths:true,
        selectOtherMonths:true,
        changeMonth:true,
        minDate:new Date,
        autoClose:true
    });
  } );
  </script>
@endsection

