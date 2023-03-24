@extends('layouts.app')
@section('content')
@if(Session()->has('message'))
<div class="alert alert-danger dark" role="alert">
{{ Session::get('message') }}
 </div>
 @endif
<style>
    #r1{
        color: white;font-weight: 500;font-size:18px;text-decoration:none;border-radius: 15px; padding: 5px;margin:15px;
    }
    #r1:hover{
     background: green;
     font-size:16px;
     opacity: 0.5;
    }
    h1{
        font-family: Poppins;
    }
    #r2:hover{
        font-size:20px;
     opacity: 0.5;
     color:green; 

    }
    </style>
<div class="container m-auto text-center pt-15 pb-5" style="margin:50px; padding:20px ">
<h1 class="text-6xl font-bold" ">All Advertisements</h1>
</div>
<div class="container sm:grid  mx-auto  ">
<a href="/advertisements/create"   id="r1" style="padding: 7px;margin-top:0%;background:#5B8FB9">Create Advertisements</a>
</div>
<div class="container">
  <div class="row py-3">
    @foreach($r2 as $item)  
      <div class="card mb-3" style="width: 940px;">
  <div class="row g-0">
    <div class="col-md-4" style="background: #5B8FB9; text-align:center;">
   <div style="margin:30px;display:inline-block"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>    <p class="card-title" style="color:white; font-size: 18px;margin: 5px;">{{$item->updated_at}}</p></div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a href="/advertisements/{{$item->slug}}" style="color:black">  <h5 class="card-text" id="r2">{{$item->title}}</h5> </a>
      </div>
    </div>
  </div>
</div>

    @endforeach
  </div>
</div>
@endsection
