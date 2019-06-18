@include('admin.include.admin-header')

<div class="section-wrapper form-bg">
    {!! Form::open(['action'=>['ProductsController@update',$product->id],'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        <label for = "name" class = "control-label col-sm-2 ">Name*</label>
        <div class = "col-sm-4">
            <input class="form-control" type="text" name="name" value="{{$product->name}}" >
        </div>
    </div>
    <div class = "form-group">
        <label for = "price" class = "control-label col-sm-2">Image: </label>
        <img class="col-sm-2" src="{{asset($product->image)}}" style="height: 15%; width: auto">
        <div class = "col-sm-4">
            {{Form::file('image')}}
        </div>
    </div>
    <div class="form-group">
        <label class = "control-label col-sm-2 ">Company*</label>
        <div class = "col-sm-4">
            <select class = "form-control " name = "company" id="company" >
                <option value="-">---</option>
                @foreach($companies as $company)
                    @if($company->id==$product->company)
                        <option value="{{$company->id}}" selected>{{$company->name}}</option>
                    @else
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endif

                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class = "control-label col-sm-2 ">Category*</label>
        <div class = "col-sm-4">
            <select class = "form-control " name = "category" id="category" >
                <option value="-">---</option>
                @foreach($categories as $category)
                    @if($category->id==$product->category)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for = "price" class = "control-label col-sm-2">Specifications: </label>
        <div class = "col-sm-8">
            <textarea class="form-control" name="description" id="article-ckeditor">{{$product->description}}</textarea>
        </div>
    </div>

    <div class="form-group">
        <div class = " col-sm-offset-2">
            <input type="submit" class="btn submit-btn col-sm-2" value="Submit">
        </div>

    </div>
    {{Form::hidden('_method','PUT')}}

    {!! Form::close() !!}
</div>

@include('admin.include.admin-footer')