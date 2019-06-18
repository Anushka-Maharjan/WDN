@include('admin.include.admin-header')


    <div class="section-wrapper form-bg">
        {!! Form::open(['action'=>'TestimonialsController@store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
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
                <label for = "price" class = "control-label col-sm-2">Comment: </label>
                <div class = "col-sm-8">
                    <textarea class="form-control" name="comment" id="article-ckeditor" placeholder="Comment from customers"></textarea>
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