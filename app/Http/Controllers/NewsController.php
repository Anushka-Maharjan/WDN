<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::orderBy('id','desc')->paginate(20);
        return view('admin.news.index')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title'=>'required',
            'image.*'=> 'required|mimes:jpeg,jpg,png|max: 1999',
            'description'=>'required'
        ]);

        $news=new News();
        $news->title=$request->input('title');
        $news->description=$request->input('description');
        if ($request->hasFile('image')){
            $filenameWithExt=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenameToStore=$filename."_".time().".".$extension;

            $path=$request->file('image')->storeAs('public/news/'.$request->input('company'),$filenameToStore);
            $upload_file="storage/news/".$filenameToStore;
        }else{
            $upload_file="";
        }
        $news->photo=$upload_file;
        $news->save();

        return redirect('admin/news')->with('success','News/Event successfully added');

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
        $news=News::where('id','=',$id)->get();

        foreach ($news as $new){}
        return view('admin.news.edit')->with('new',$new);
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
        $this->validate($request,[
            'title'=>'required',
            'image'=> 'mimes:jpeg,jpg,png|max: 1999',
            'description'=>'required'
        ]);
        $news=News::where('id','=',$id)->first();
        $news->title=$request->input('title');
        $news->description=$request->input('description');
        if ($request->hasFile('image')){
            $filenameWithExt=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenameToStore=$filename."_".time().".".$extension;

            $path=$request->file('image')->storeAs('public/news/'.$request->input('company'),$filenameToStore);
            $upload_file="storage/news/".$filenameToStore;
                    $news->photo=$upload_file;

        }else{
            $upload_file="";
        }
        $news->save();

        return redirect('admin/news')->with('success','News/Event successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::where('id','=',$id)->first();
        $news->delete();

        return redirect('admin/news')->with('success','News/Event successfully deleted');
    }
}
