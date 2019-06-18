@include('admin.include.admin-header')

    <div class="section-wrapper form-bg">
        {!! Form::open(['action'=>'NewsController@store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                <label for = "name" class = "control-label col-sm-2 ">Title*</label>
                <div class = "col-sm-4">
                    <input class="form-control" type="text" name="title" placeholder="Title" >
                </div>
            </div>
        <div class = "form-group">
            <label for = "price" class = "control-label col-sm-2">Image: </label>
            <div class = "col-sm-4">
                {{Form::file('image')}}
            </div>
        </div>
            <div class="form-group">
                <label for = "price" class = "control-label col-sm-2">Description: </label>
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

@include('admin.include.admin-footer')