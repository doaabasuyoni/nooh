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
<h1 class="text-6xl font-bold" ">All News</h1>
</div>
<div class="container sm:grid  mx-auto  ">
<a href="/new/create"   id="r1" style="padding: 7px;margin-top:0%;background:#5B8FB9">Create New</a>
</div>
<div class="container">
  <div class="row py-3">
    @foreach($r2 as $item)
      <div class="col-md-4" >   
        <div class="card" style="width: 18rem; height: 520px;">
          <img src="/newimage/{{$item->image_path}}" class="card-img-top" alt="...">
          <div class="card-body">
          <a href="/new/{{$item->slug}}" style="color:black">  <h5 class="card-text" id="r2">{{$item->title}}</h5> </a>
            <p class="card-title" style="color: rgb(135, 135, 136); font-size: 12px;">{{$item->updated_at}}</p>
            <a href="/new/{{$item->slug}}" class="btn" id="r1" style="background:#5B8FB9;border-radius: 10px;color:white">Read More</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
