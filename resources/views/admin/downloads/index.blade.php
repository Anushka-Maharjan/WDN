@include('admin.include.admin-header')
    <div class="section-wrapper form-bg">
        <div>
            <a href="{{url('admin/downloads/create')}}"><button class="btn btn-info col-sm-2"><span class="fa fa-plus"></span> Add Download Records</button></a>
            <a href="{{url('admin/download-category/')}}"><button class="btn btn-info col-sm-2 col-sm-offset-8"><span class="fa fa-list"></span> Show Download Categories</button></a>
        </div>
        <table class="table">
            <thead>
            <th>Title</th>
            <th>File</th>
            <th>Category</th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            @foreach($downloads as $download)
                <tr>
                    <td>{{$download['title']}}</td>
                    <td><a href="{{url($download['file'])}}" target="_blank">File</a> </td>
                    <td>{{$download['category']}}</td>
                    <td><a href="{{url('admin/downlaods/'.$download['id'].'/edit')}}">Edit</a></td>
                    <td><a href="{{url('admin/downloads/'.$download['id'].'/delete')}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@include('admin.include.admin-footer')