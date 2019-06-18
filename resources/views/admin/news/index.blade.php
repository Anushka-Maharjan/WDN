@include('admin.include.admin-header')
    <div class="section-wrapper form-bg">
        <a href="{{url('admin/news/create')}}"><button class="btn btn-info col-sm-2"><span class="fa fa-plus"></span> Add News/Events</button></a>
        <table class="table">
            <thead>
            <th>Title</th>
            {{--<th>description</th>--}}
            <th>Image</th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                    <td>{{$new->title}}</td>
                    <td><img src="{{asset($new->photo)}}" style="height: 7%; width: auto"> </td>
                    <td><a href="{{url('admin/news/'.$new->id.'/edit')}}">Edit</a></td>
                    <td><a href="{{url('admin/news/'.$new->id.'/delete')}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@include('admin.include.admin-footer')