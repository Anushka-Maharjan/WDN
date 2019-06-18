@include('include.header')
<div class="header-bg"></div>
<div class="title-section-wrapper wdn-color">
    <h3 class="text-white">News/Events</h3>
</div>
<div class="news-container">
    @include('admin.include.messages')
    @foreach($news as $new)
    <div class="row news-block">
        <div class="col-md-4">
            <img src="{{asset($new->photo)}}" class="img-responsive">
        </div>
        <div class="col-md-8">
            <h4>{{$new->title}}</h4>
            <p class="news-date">May 10 2019</p>
            <div class="maxText-gr">{!!$new->description!!}</div>
            <button class="news-detail-btn">Read More</button>
        </div>
    </div>
    @endforeach

    {{--<div class="row news-block">--}}
        {{--<div class="col-md-4">--}}
            {{--<img src="{{asset('images/product/printer.jpg')}}" class="img-responsive">--}}
        {{--</div>--}}
        {{--<div class="col-md-8">--}}
            {{--<h4>News title</h4>--}}
            {{--<p class="news-date">May 10 2019</p>--}}
            {{--<p class="maxText-gr">This is news. This is news. This is news. This is news. 7This is news. This is news. This is news. This is news.--}}
                {{--This is news. This is news. 1This is news.<br> This is news. This is news.--}}
                {{--This is news. This is news. 2This is news. This is news. This is news.--}}
                {{--This is news. This is news. 3This is news. This is news. This is news.--}}
                {{--This is news. This is news. 4This is news. This is news. This is news.--}}
                {{--This is news. This is news. 5This is news. This is news. This is news. <br>--}}
                {{--This is news. This is news. 6This is news. This is news. This is news.--}}
                {{--This is news. This is news. This is news. This is news. This is news.--}}
                {{--This is news. This is news. This is news. This is news. </p>--}}
            {{--<button class="news-detail-btn">Read More</button>--}}

        {{--</div>--}}
    {{--</div>--}}
</div>

@include('include.footer')