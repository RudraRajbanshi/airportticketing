@extends('home')
@section('content1')

<div class="container-fluid" style="margin-top:-200px">
    <div class="row">

    <main role = 'main' class="col-md-9 ml-sm-auto col-lg-10">
        <h3>Tickets</h3>

    <a href = '{{ url('/ticket/create') }}' class = 'btn btn-primary'>Add</a>
<table class = 'table table-striped'>
  <tr>
      <th>Flight Name</th>
      <th>From</th>
      <th>To</th>
      <th>Price</th>
      <th>Date</th>
      <th>Image</th>
      <th colspan="2">Action</th>
  </tr>

  @foreach ($tickets as $t)
  <tr>
  <td>{{ $t['flight_name'] }}</td>
  <td>{{ $t['from'] }}</td>
  <td>{{ $t['to'] }}</td>
  <td>{{ $t['price'] }}</td>
  <td>{{ $t['date'] }}</td>
  <td><img style = "height:120px; width:auto;' >" src = "{{ URL::to('/').'/uploads/'.$t['image'] }}"> </td>
<td><a href=""> Edit </a></td>
<td><a href=""> Delete </a></td>
</tr>
  @endforeach



</table>
      </main>
    </div>
  </div>
@endsection
