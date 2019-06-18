@include('admin.include.admin-header')

    <div class="section-wrapper form-bg">
{!! Form::open(['action'=>['DownloadCategoriesController@update',$category->id],'method'=>'POST','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {{Form::label('name','Name',['class'=>'control-label col-sm-2'])}}
            <div class = "col-sm-2 no-outline">

            {{Form::text('name',$category->name,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">

            <div class = "col-sm-offset-2">
                {{Form::submit('Submit',['class'=>'col-sm-2 btn submit-btn'])}}
            </div>

        </div>
        {{Form::hidden('_method','PUT')}}

        {!! Form::close() !!}

    </div>
@include('admin.include.admin-footer')