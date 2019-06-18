<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= ProductCategory::orderBy('id')->paginate(10);
        return view('admin.productcategories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $category=new ProductCategory();
        $category->name=$request->input('name');

        $category->save();

        return back()->with('success','Product Category Created');
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
        $catgories=ProductCategory::where('id','=',$id)->get();

        foreach ($catgories as $catgory){}
        return view('admin.productcategories.edit')->with('category',$catgory);
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

        $category=ProductCategory::where('id','=',$id)->first();
        $category->name=$request->input('name');

        $category->save();

        return redirect('admin/product-category')->with('success','News/Event successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Product::where('category','=',$id)->get();
        if ($products->count()>0){
            return redirect('admin/product-category/')->with('error','Product Category failed to delete. Product records with this category exists.');
        }else {
            $category = ProductCategory::where('id', '=', $id)->first();
            $category->delete();
            return redirect('admin/product-category/')->with('success', 'Download Category successfully deleted');
        }
    }
}
