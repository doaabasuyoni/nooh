<?php

namespace App\Http\Controllers;
use App\Models\imgchage;
use Illuminate\Http\Request;

class changeimage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('changimagehome.changimagehome');
    }

    
    public function editData(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:jpg,png,jped|max:5048',
            'file1'=>'required|mimes:jpg,png,jped|max:5048',
            'file2'=>'required|mimes:jpg,png,jped|max:5048'
          ]);
           $image1=uniqid() . '-' . '.' . $request->file->extension();
           $request->file->move(public_path('changeimage'), $image1);
           $image2=uniqid() . '-' . '.' . $request->file1->extension();
           $request->file1->move(public_path('changeimage'), $image2);
           $image3=uniqid() . '-' . '.' . $request->file2->extension();
           $request->file2->move(public_path('changeimage'), $image3);
           imgchage::where('id',1)->update([
            'imagefirst'=> $image1,
            'imagesec'=> $image2,
            'imagelast'=> $image3,
          ]);
         
          return redirect('/HomePage');
    }

    
}
