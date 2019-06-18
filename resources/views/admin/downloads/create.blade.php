@include('admin.include.admin-header')

    <div class="section-wrapper form-bg">

        {!! Form::open(['action'=>'DownloadsController@store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                <label for = "name" class = "control-label col-sm-2 ">Title*</label>
                <div class = "col-sm-4">
                    <input class="form-control" type="text" name="title" placeholder="Title" >
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
            <div class = "form-group">
                <label for = "download_type" class = "control-label col-sm-2">Download Type: </label>
                <div class = "col-sm-4">
                    <select type = "text" class="form-control"  name="download_type" id="download_type" placeholder = "Payment Status" >
                        <option value="-">---</option>
                        <option value = "File">File</option>
                        <option value = "Link">Link</option>
                    </select>
                </div>
            </div>

            <div class="type_fields_wrap" id = type_fields_wrap>
               
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
            {!! Form::open(['action'=>'DownloadCategoriesController@store','method'=>'POST','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {{Form::label('name','Name',['class'=>'control-label col-sm-3'])}}
                <div class = "col-sm-6 ">

                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Download Category'])}}
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
    $(document).ready(function() {
        var wrapper2 = $(".type_fields_wrap");

        $('#download_type').change(
            function (e) {
                if ($(this).val() == "Link") {
                    $(wrapper2).empty();
                    $(wrapper2).append(
                        '<div class = "form-group">\n' +
                        '            <label for = "price" class = "control-label col-sm-2">Link: </label>\n' +
                        '            <div class = "col-sm-4">\n' +
                        '                <input type="text" class = "form-control" name="link" id="link" />\n' +
                        '            </div>\n' +
                        '</div>'
                    )
                }
                else if($(this).val() == "File") {
                    $(wrapper2).empty();
                    $(wrapper2).append(
                        '<div class = "form-group">\n' +
                        '            <label for = "price" class = "control-label col-sm-2">File: </label>\n' +
                        '            <div class = "col-sm-4">\n' +
                        '                {{Form::file('download_file')}}\n' +
                        '            </div>\n' +
                        '</div>'

                    )
                }else{
                    $(wrapper2).empty();
                }
            }
        );
    })

    function displaymodal(){
        $('#addCategory').modal('show');

    }
</script>
@include('admin.include.admin-footer')