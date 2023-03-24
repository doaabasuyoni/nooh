<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\advertisemenall;
use App\Models\imgchage;
class pagehome extends Controller
{
    public function index(){
      $row=advertisemenall::orderBy('created_at', 'desc') ->take(5) ->get();
      $r= imgchage::orderBy('created_at', 'desc')->take(1)->get();
        return view('Homepage',compact('row','r'))->with('rows',post::orderBy('created_at', 'desc')
        ->take(6)
        ->get());
      }  
      
}
