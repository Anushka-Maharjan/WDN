@include('include.header')
<div class="header-bg">
</div>
<div class="title-section-wrapper wdn-color">
    <h3 class="text-center text-white">Downloads</h3>
</div>
<div class="section-wrapper">
    @include('admin.include.messages')

@if(!empty($categories))
       @foreach($categories as $category)
            <h3 class="download-cat">{{$category->name}}</h3>
        <table class="width100 download">

           @foreach($downloads as $download)
                @if($download->category==$category->id)
                    <tr>
                        {{--<td class="col-md-3"></td>--}}
                        <td class="col-md-3">{{$download->title}}</td>
                        <td class="col-md-3"><a target="_blank" href="{{asset($download->file)}}">{{$download->title}} link</a></td>
                        {{--<td class="col-md-3"></td>--}}
                    </tr>
                @endif
            @endforeach
        </table>
        @endforeach

    @endif
</div>
@include('include.footer')