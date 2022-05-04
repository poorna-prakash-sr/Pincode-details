@extends('layout.app')
@section('navbar-content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('/') }}">Pincode Finder</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
         
        </ul>
        <form class="d-flex" action="{{ route('search') }}" method="GET" autocomplete="off">
          <input class="form-control me-2" type="search" placeholder="Search" name="q" aria-label="Search" value="{{is_null($search)?"":$search}}">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  @yield('main-content')   
@endsection