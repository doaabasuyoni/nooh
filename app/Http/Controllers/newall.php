<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\post;


class newall extends Controller
{
 public function index(){
    return view('news.new')->with('r2',post::orderBy('created_at','DESC')->get());
 }
 public function create(){
   return view('news.creat');
 }
 public function store(Request $request){
  $request->validate([
    'title'=>'required',
    'description'=>'required',
    'file'=>'required|mimes:jpg,png,jped|max:5048'
  ]);
   $newimagename=uniqid() . '-' .$request->title . '.' . $request->file->extension();
   $request->file->move(public_path('newimage'), $newimagename);
   $slug = Str::slug($request->title,'-');
 
   post::create([
    'title'=> $request->input('title'),
    'slug'=>$slug,
    'description'=>$request->input('description'),
    'image_path'=>$newimagename
  ]);
return redirect('/new')->with('message','create New successfully');;
 
 }
 public function show($slug){
    return view('news.show')->with('r3',post::where('slug',$slug)->first());
 }
 public function edit($slug){
  return view('news.edit')->with('r4',post::where('slug',$slug)->first());;

 }
 public function update(Request $request, $slug){
  $request->validate([
    'title'=>'required',
    'description'=>'required',
    'file'=>'required|mimes:jpg,png,jped,jpeg|max:5048'
  ]);
   $newimagename=uniqid() . '-' .$request->title . '.' . $request->file->extension();
   $request->file->move(public_path('newimage'), $newimagename); 
   post::where('slug',$slug)->update([
    'title'=> $request->input('title'),
    'slug'=>$slug,
    'description'=>$request->input('description'),
    'image_path'=>$newimagename
  ]);
return redirect('/new/'.$slug)->with('message','Edit New successfully');
 }

 public function destroy($slug){
  post::where('slug',$slug)->delete();
  return redirect('/new')->with('message','Delete New successfully');

 }
}
