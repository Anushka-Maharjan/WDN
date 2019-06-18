<?php

namespace App\Http\Controllers;

use App\Downloads;
use Illuminate\Http\Request;
use App\DownloadCategory;

class DownloadCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= DownloadCategory::orderBy('id')->paginate(10);
        return view('admin.downloadcategories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.downloadcategories.create');
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
            'name'=>'required'
        ]);

        $category=new DownloadCategory();
        $category->name=$request->input('name');

        $category->save();

        return back()->with('success','Download Category Created');
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
        $catgories=DownloadCategory::where('id','=',$id)->get();

        foreach ($catgories as $catgory){}
        return view('admin.downloadcategories.edit')->with('category',$catgory);
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
            'name'=>'required'
        ]);

        $category=DownloadCategory::where('id','=',$id)->first();
        $category->name=$request->input('name');

        $category->save();

        return redirect('admin/download-category')->with('success','News/Event successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $downloads=Downloads::where('category','=',$id)->get();
        if ($downloads->count()>0){
            return redirect('admin/download-category/')->with('error','Download Category failed to delete. Download records with this category exists.');
        }else {
            $category = DownloadCategory::where('id', '=', $id)->first();
            $category->delete();

            return redirect('admin/download-category/')->with('success', 'Download Category successfully deleted');
        }
    }
}
