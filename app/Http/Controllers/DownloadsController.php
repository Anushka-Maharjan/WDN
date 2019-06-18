<?php

namespace App\Http\Controllers;

use App\DownloadCategory;
use App\Downloads;
use Illuminate\Http\Request;


class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads=Downloads::orderBy('id','desc')->get();
        $final_downloads=array();
        foreach ($downloads as $download){
            unset($each);
            $each['id']=$download->id;
            $each['title']=$download->title;
            $each['file']=$download->file;
            $each['category']=findCategory($download->category);
            array_push($final_downloads,$each);
        }
//        echo print_r($final_downloads);
        return view('admin.downloads.index')->with('downloads',$final_downloads);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories= DownloadCategory::all();
//        $list=array();
//        foreach ($categories as $category){
//            array_push($list,$category->name);
//        }
//        print_r($list);
       return view('admin.downloads.create')->with('categories',$categories);

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
            'category'=>'not_regex:/-/',
            'download_type'=>'not_regex:/-/',
            'download_file.*'=> 'required_if:download_type,File|mimes:jpeg,pdf,jpg,png,doc,docx|max: 1999',
            'link'=> 'required_if:download_type,Link'
        ],
            ['not_regex'=>'The :attribute field cannot be empty']);

        $downloads=new Downloads();
        $downloads->title=$request->input('title');
        $downloads->category=$request->input('category');
        if ($request->hasFile('download_file')){
            $filenameWithExt=$request->file('download_file')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenameToStore=$filename."_".time().".".$extension;
            $path=$request->file('download_file')->storeAs('public/download-files',$filenameToStore);
            $upload_file="storage/download-files/".$filenameToStore;
        }else{
            $upload_file=$request->input('link');
        }
        $downloads->file=$upload_file;
        $downloads->save();


        return redirect('admin/downloads')->with('success','Download Record successfully added');
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
        $downloads=Downloads::where('id','=',$id)->first();
        $downloads->delete();

        return redirect('admin/downloads')->with('success','Download Record successfully deleted');
    }
}
function findCategory($id){
    $categories=DownloadCategory::where('id','=',$id)->get();
    foreach ($categories as $category){
        $name=$category->name;
    }
    return $name;
}
