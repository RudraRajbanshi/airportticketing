@extends('layouts.app')

@section('content')

<nav class="col-md-2 d-none d-md-block bg-light sidebar" >
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/ticket') }}">
            <span data-feather="file"></span>
            Tickets
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <span data-feather="shopping-cart"></span>
            News
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <span data-feather="users"></span>
            Changes Password
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <span data-feather="layers"></span>
            Logout
          </a>
        </li>
      </ul>



    </div>
  </nav>



@endsection
