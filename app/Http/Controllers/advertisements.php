<?php

namespace App\Http\Controllers;
use App\Models\advertisemenall;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class advertisements extends Controller
{
        public function index(){
            return view('advertisements.advertisements')->with('r2',advertisemenall::orderBy('created_at','DESC')->get());
         }
         public function create(){
           return view('advertisements.creat');
         }
         public function store(Request $request){
          $request->validate([
            'title'=>'required',
            'description'=>'required',
          ]);
           $slug = Str::slug($request->title,'-');
         
           advertisemenall::create([
            'title'=> $request->input('title'),
            'slug'=>$slug,
            'description'=>$request->input('description'),
          ]);
        return redirect('/advertisements')->with('message','create New successfully');;
         
         }
         public function show($slug){
            return view('advertisements.show')->with('r3',advertisemenall::where('slug',$slug)->first());
         }
         public function edit($slug){
          return view('advertisements.edit')->with('r4',advertisemenall::where('slug',$slug)->first());
        
         }
         public function update(Request $request, $slug){
          $request->validate([
            'title'=>'required',
            'description'=>'required',
          ]); 
           advertisemenall::where('slug',$slug)->update([
            'title'=> $request->input('title'),
            'slug'=>$slug,
            'description'=>$request->input('description'),
          ]);
        return redirect('/advertisements/'.$slug)->with('message','Edit Advertisements successfully');
         }
        
         public function destroy($slug){
            advertisemenall::where('slug',$slug)->delete();
          return redirect('/advertisements')->with('message','Delete Advertisements successfully');
        
         }
        }
        