@include('admin.include.admin-header')

    <div class="section-wrapper form-bg">
        {!! Form::open(['action'=>'ProductsController@store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                <label for = "name" class = "control-label col-sm-2 ">Name*</label>
                <div class = "col-sm-4">
                    <input class="form-control" type="text" name="name" placeholder="Name" >
                </div>
            </div>
        <div class = "form-group">
            <label for = "price" class = "control-label col-sm-2">Image: </label>
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
                        <option value="{{$company->id}}">{{$company->name}}</option>
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
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <a class="btn btn-info col-sm-2" onclick="displaymodal()"><span class="fa fa-plus"></span>Add Category</a>
        </div>
            <div class="form-group">
                <label for = "price" class = "control-label col-sm-2">Specifications: </label>
                <div class = "col-sm-8">
                    <textarea class="form-control" name="description" id="article-ckeditor" placeholder="Specs of the product"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class = " col-sm-offset-2">
                    <input type="submit" class="btn submit-btn col-sm-2" value="Submit">
                </div>

            </div>
        {!! Form::close() !!}
    </div>
<div class="modal fade " id="addCategory" role="dialog" style="width: 50%; margin:10% 25% 0% 25%">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="text-center text-white"> Add Category</h3>
        </div>
        <div class="modal-body">
            {!! Form::open(['action'=>'ProductCategoriesController@store','method'=>'POST','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {{Form::label('name','Name',['class'=>'control-label col-sm-3'])}}
                <div class = "col-sm-6 ">

                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Product Category'])}}
                </div>
            </div>
            <div class="form-group">

                <div class = "col-sm-offset-2">
                    {{Form::submit('Submit',['class'=>'col-sm-4 btn submit-btn'])}}
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    function displaymodal(){
        $('#addCategory').modal('show');

    }
</script>
@include('admin.include.admin-footer')