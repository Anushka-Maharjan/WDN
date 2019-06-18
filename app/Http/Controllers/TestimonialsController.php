<?php

namespace App\Http\Controllers;

use App\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/testimonials/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'comment'=>'required',
            'image'=> 'required|mimes:jpeg,jpg,png|max: 1999',
        ]);

        $testimonial=new Testimonials();
        $testimonial->name=$request->input('name');
        $testimonial->comment=$request->input('comment');
        if ($request->hasFile('image')){
            $filenameWithExt=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenameToStore=$filename."_".time().".".$extension;

            $path=$request->file('image')->storeAs('public/testimonials',$filenameToStore);
            $upload_file="storage/testimonials/".$filenameToStore;
        }else{
            $upload_file="";
        }
        $testimonial->photo=$upload_file;
        $testimonial->save();


        return redirect('admin/testimonials')->with('success','Testimonial successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
