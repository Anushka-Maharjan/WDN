<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        $final_products=array();
        foreach ($products as $product){
            unset($each);
            $each['id']=$product->id;
            $each['name']=$product->name;
            $each['image']=$product->image;
            $each['company']=findCompany($product->company);
            $each['category']=findCategoryProduct($product->category);
            array_push($final_products,$each);
        }

        return view('admin.product.index')->with('products',$final_products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= ProductCategory::all();
        $companies=Company::all();
        $data=array(
            'categories'=>$categories,
            'companies'=>$companies
        );

        return view('admin.product.create')->with($data);
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
            'category'=>'not_regex:/-/',
            'company'=>'not_regex:/-/',
            'image'=> 'required|mimes:jpeg,jpg,png|max: 1999',
            'description'=>'required'
        ],
            ['not_regex'=>'The :attribute field cannot be empty']);

        $product=new Product();
        $product->name=$request->input('name');
        $product->category=$request->input('category');
        $product->company=$request->input('company');
        $product->description=$request->input('description');
        if ($request->hasFile('image')){
            $filenameWithExt=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenameToStore=$filename."_".time().".".$extension;

            $path=$request->file('image')->storeAs('public/product/'.$request->input('company'),$filenameToStore);
            $upload_file="storage/product/".$request->input('company')."/".$filenameToStore;
        }else{
            $upload_file="";
        }
        $product->image=$upload_file;
        $product->save();

        return redirect('admin/product')->with('success','Product successfully added');

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
        $products=Product::where('id','=',$id)->get();
        foreach ($products as $product){}

        $categories= ProductCategory::all();
        $companies=Company::all();
        $data=array(
            'categories'=>$categories,
            'companies'=>$companies,
            'product'=>$product
        );

        return view('admin.product.edit')->with($data);
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
            'name'=>'required',
            'category'=>'not_regex:/-/',
            'company'=>'not_regex:/-/',
            'image'=> 'mimes:jpeg,jpg,png|max: 1999',
            'description'=>'required'
        ],
            ['not_regex'=>'The :attribute field cannot be empty']);

        $product=Product::where('id','=',$id)->first();
        $product->name=$request->input('name');
        $product->category=$request->input('category');
        $product->company=$request->input('company');
        $product->description=$request->input('description');
        if ($request->hasFile('image')){
            $filenameWithExt=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenameToStore=$filename."_".time().".".$extension;

            $path=$request->file('image')->storeAs('public/product/'.$request->input('company'),$filenameToStore);
            $upload_file="storage/product/".$request->input('company')."/".$filenameToStore;
            $product->image=$upload_file;

        }
        $product->save();

        return redirect('admin/product')->with('success','Product successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Product::where('id','=',$id)->first();
        $products->delete();

        return redirect('admin/product')->with('success','Product Record successfully deleted');
    }
}

function findCategoryProduct($id){
    $categories=ProductCategory::where('id','=',$id)->get();
    foreach ($categories as $category){
        $name=$category->name;
    }
    return $name;
}

function findCompany($id){
    $categories=Company::where('id','=',$id)->get();
    foreach ($categories as $category){
        $name=$category->name;
    }
    return $name;
}


