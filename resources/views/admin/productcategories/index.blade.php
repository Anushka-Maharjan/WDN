@include('admin.include.admin-header')
    <div class="section-wrapper form-bg">
        <table class="table">
            <thead>
                <th>Name</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td><a href="{{url('admin/product-category/'.$category->id.'/edit')}}">Edit</a></td>
                        <td><a href="{{url('admin/product-category/'.$category->id.'/delete')}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@include('admin.include.admin-footer')