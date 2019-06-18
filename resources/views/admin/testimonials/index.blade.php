@include('admin.include.admin-header')
    <div class="section-wrapper form-bg">
        <table class="table">
            <thead>
            <th>Title</th>
            <th>File</th>
            <th>Category</th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            {{--@foreach($categories as $category)--}}
                {{--<tr>--}}
                    {{--<td>{{$category->name}}</td>--}}
                    {{--<td>Edit</td>--}}
                    {{--<td>Delete</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            </tbody>
        </table>

    </div>
@include('admin.include.admin-footer')