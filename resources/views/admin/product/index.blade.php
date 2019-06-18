@include('admin.include.admin-header')
    <div class="section-wrapper form-bg">

        <a href="{{url('admin/product/create')}}"><button class="btn btn-info col-sm-2"><span class="fa fa-plus"></span> Add Product</button></a>
        <a href="{{url('admin/product-category/')}}"><button class="btn btn-info col-sm-2 col-sm-offset-8"><span class="fa fa-list"></span> Show Download Categories</button></a>
        <table class="table">
            <thead>
            <th>Name</th>
            <th>Company</th>
            <th>Category</th>
            <th>Image</th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['company']}}</td>
                    <td>{{$product['category']}}</td>
                    <td><img src="{{asset($product['image'])}}" style="height: 7%; width: auto"></td>
                    <td><a href="{{url('admin/product/'.$product['id'].'/edit')}}">Edit</a></td>
                    <td><a href="{{url('admin/product/'.$product['id'].'/delete')}}" onclick="return confirm('Are you sure?')">Delete</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@include('admin.include.admin-footer')