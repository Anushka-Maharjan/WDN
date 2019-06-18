<?php

namespace App\Http\Controllers;

use App\News;
use App\Product;
use Illuminate\Http\Request;
use App\DownloadCategory;
use App\Downloads;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendQuery;
use App\Mail\SendContantMail;
class PagesController extends Controller
{
    public function index(){
        $categories=DownloadCategory::all();
//        return view('home', compact('title'));
        return view('home')->with('categories',$categories);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function customers(){
        return view('customer');
    }

    public function downloads(){
        $downloads=Downloads::all();
        $download_categories=DownloadCategory::all();
        $info=array("downloads"=>$downloads,"categories"=>$download_categories);
//        return view('download-files');
         return view('downloads')->with($info);
    }

    public function product(){
        return view('product');
    }

    public function productDetail($id){
        $products=Product::where('id','=',$id)->get();
        foreach ($products as $product){ }

        return view('product-detail')->with('product',$product);
    }

    public function sendMail(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'enquiry_text'=>'required'
        ]);

        $products=Product::where('id','=',$request->product_id)->get();
        foreach ($products as $product){ }
        $request->contact=empty($request->contact)?"Not Given":$request->contact;

        $data=array(
            'name'=>$request->name,
            'product_name'=>$product->name,
            'enquiry_text' =>$request->enquiry_text,
            'email'=>$request->email,
            'contact'=>$request->contact
        );

        Mail::to('amaharjan.logispark@gmail.com')->send(new SendQuery($data));
        return back()->with('success','Your enquiry has been sent. Our sales team will get back to you.');
//        return redirect('admin/download-category')->with('success','Post Created');
    }

    public function sendContactMail(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'body'=>'required',
        ]);

        $data=array(
            'name'=>$request->name,
            'body' =>$request->body,
            'email'=>$request->email,
        );

        Mail::to('amaharjan.logispark@gmail.com')->send(new SendContantMail($data));
        return back()->with('success', 'Your enquiry has been sent. Our customer service team will get back to you.');
//        return redirect('admin/download-category')->with('success','Post Created');
    }

    public function news(){
        $news= News::orderBy('id','desc')->paginate(10);

        return view('news')->with('news',$news);
    }

    public function partners(){
        return view('partners');
    }
}
