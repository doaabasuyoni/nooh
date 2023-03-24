@extends('layouts.app')
@section('content')
 @if(Session()->has('message'))
<div class="alert alert-success dark" role="alert">
{{ Session::get('message') }}
 </div>
 @endif
<style>
#r1{
     text-decoration:none;
     width: 140px;
    font-size: 18px;
    border-radius: 10px;
    font-weight: 600;
    position: absolute;
    left: 150px;
    margin-bottom: 100px;
    color: white;
    padding: 5px;
    }
    #r1:hover{
     background: rgb(55, 55, 56);
     font-size:16px;
     opacity: 0.5;

    } 
    #r2{
     text-decoration:none;
     width: 140px;
    font-size: 18px;
    border-radius: 10px;
    font-weight: 600;
    position: absolute;
    left: 300px;
    margin-bottom: 50px;
    color: white;
    padding: 5px;
    border:none;
    }
    #r1:hover{
     background: rgb(55, 55, 56);
     font-size:16px;
     opacity: 0.5;

    }


</style>
<div class="container m-auto text-center pt-15 pb-5" style="padding:40px;">
<h1 class="text-6xl font-bold" style="padding:60px;"> {{$r3->title}}</h1>

<div >
   <img class="object-cover" src="/newimage/{{$r3->image_path}}" style="width: 100%; height: 470px ;padding:10px" />
</div>
<div >
    <div>
    <span style="color: rgb(135, 135, 136); font-size: 18px;padding: 20px;" >{{$r3->updated_at}}</span>
    <p class="text-gray-700 text-l py-8 leading-6" style="padding-top: 30px;margin: bottom 100px;">
    {!! $r3->description!!}
    </p>
    <a href="/new/{{$r3->slug}}/edit"   id="r1" class="bg-success">Edit New</a>
    <form action="/new/{{$r3->slug}}" method="POST"  >
                      @csrf
                      @method('delete')
    <button   id="r2" class="bg-danger" name="submit" type="submit">Delete New</a>
    </form>
    </div>
    
    </div>
</div>
@endsection