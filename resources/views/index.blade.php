@extends('layout.navbar')
@section('main-content')

 @if ($status=="1")
 <div class="container p-2">
  <div class="row">
    @foreach ($post as $poste)
    <div class="col-xl-3 col-sm-12 col-md-6 p-1">
      <div class="card shadow bg-body rounded" >
        <div class="card-body">
          <h5 class="card-title">{{$poste['Name']}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$poste['BranchType']}}</h6>
          <div class="row">
            <div class="col-12">
              <p>Delivery Status : {{$poste['DeliveryStatus']}}<p>
              <p>District : {{$poste['District']}}<p>
              <p>State : {{$poste['State'] }}<p>
               
            </div>
          </div>
          
            <div class="row ">
              <div class="col-8">
                <p class="">Pincode : {{$poste['Pincode']}}</p>
              </div>
             
            </div>
          
        
        </div>
      </div>
    </div>

@endforeach
  
    
  </div>
</div>
@else
<div class="container p-4">
<div class="row">
  <div class="col-12 d-flex justify-content-center p-4">
    <img src="{{asset("images/empty_state.gif")}}" alt="" srcset="">
  </div>
  <div class="col-12 d-flex justify-content-center p-4">
    <h1>Not Found "{{$search}}"</h1>
    
  </div>
  <h5 class="d-flex justify-content-center p-4">Please search correct pin code or name</h5>
  </div>  
</div>

 @endif
  
@endsection