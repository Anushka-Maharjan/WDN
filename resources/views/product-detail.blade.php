@include('include.header')
<div class="header-bg">
</div>
<div class="title-section-wrapper wdn-color">
    <h3 class="text-white">{{$product->name}}</h3>
</div>

<div class="section-wrapper" style="overflow: hidden; height: 600px">
    @include('admin.include.messages')
    <div class="row">
        {{--<h1>{{$id}}</h1>--}}
        <div class="col-md-5">
            <div class="bzoom_wrap">
                <ul id="bzoom">
                    <li>
                        <img class="bzoom_thumb_image" src="{{asset($product->image)}}" title="first img" />
                        <img class="bzoom_big_image" src="{{asset($product->image)}}"/>
                    </li>
                    {{--<li>--}}
                        {{--<img class="bzoom_thumb_image " src="{{asset('images/product/dell-workstation.png')}}"/>--}}
                        {{--<img class="bzoom_big_image " src="{{asset('images/product/dell-workstation.png')}}"/>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<img class="bzoom_thumb_image" src="{{asset('images/product/Toshiba1%20(1).png')}}"/>--}}
                        {{--<img class="bzoom_big_image" src="{{asset('images/product/Toshiba1%20(1).png')}}"/>--}}
                    {{--</li>--}}

                </ul>
            </div>

        </div>
        <div class="col-md-6 product-spec">
            {{--<ul>--}}
                <h4 class="product-title text-center">Specifications</h4>
                {!!$product->description!!}
                {{--<li>Feature Description 1</li>--}}
                {{--<li>Feature Description 2</li>--}}
                {{--<li>Feature Description 3</li>--}}
                {{--<li>Feature Description 4</li>--}}
                {{--<li>Feature Description 5</li>--}}
            {{--</ul>--}}
            <button class="width100 wdn-color btn" onclick="displaymodal()">Enquire this product</button>
        </div>
    </div>
</div>

<div class="modal fade " id="enquiry" role="dialog">
    <!-- Modal content-->
    <div class="modal-content enquiry" style="width: 50%">
        <div class="modal-header modal-hdr">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="text-center text-white"> Enquiry </h3>
        </div>
        <div class="modal-body contact-form" style="margin-top: 2%">

            {!! Form::open(['action'=>'PagesController@sendMail','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                <ul>
                    <li>
                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    </li>
                    <li>
                        <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                    </li>
                    <li>
                        <input type="text" class="form-control" name="contact" placeholder="Contact Number">
                    </li>
                    <li>
                        <textarea class="form-control" name="enquiry_text" placeholder="Write your enquiry"></textarea>
                    </li>
                    <li>
                        <input class="submit" value="Send Enquiry" type="submit">
                    </li>
                </ul>
                <input type="hidden" name="product_id" value="{{$product->id}}">
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/jqzoom.js')}}"></script>
<script type="text/javascript">
    $("#bzoom").zoom({
        zoom_area_width: 450,
        autoplay_interval :3000,
        small_thumbs : 3,
        autoplay : false
    });
    function displaymodal(){
        $('#enquiry').modal('show');

    }
</script>

@include('include.footer')