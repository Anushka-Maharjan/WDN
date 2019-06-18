@include('include.header')
<div class="header-bg"></div>
<div class="title-section-wrapper wdn-color">
    <h3 class="text-white"> Partners</h3>
</div>

<div class="section-wrapper">
    @include('admin.include.messages')

    <div class="row">
        <div class="col-md-2">
            <ul class="partner-list">
                <li class="n1">Cisco</li>
                <li class="n2">Dell</li>
                <li class="n3">Diebold Nixdorf</li>
                <li class="n4">F5</li>
                <li class="n5">Huawei</li>
                <li class="n6">Juniper</li>
                <li class="n7">Matica</li>
                <li class="n8">Oracle</li>
                <li class="n10">Thales</li>
                <li class="n11">NBS</li>
                <li class="n12">Verifone</li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="col-md-3 ">
                <a href="https://www.cisco.com/" target="_blank"><img src="{{asset('images/partners/cisco.png')}}" class="img-responsive p1"></a>
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/partners/dell.png')}}" class="img-responsive p2">
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/partners/deibold.png')}}" class="img-responsive p3">
            </div>
            <div class="col-md-3 ">
                <img src="{{asset('images/partners/f5.png')}}" class="img-responsive p4">
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/partners/huawei.png')}}" class="img-responsive p5">
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/partners/juniper.png')}}" class="img-responsive p6">
            </div>
            <div class="col-md-3 ">
                <img src="{{asset('images/partners/matica.png')}}" class="img-responsive p7">
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/partners/oracle.png')}}" class="img-responsive p8">
            </div>
            <div class="col-md-3 ">
                <img src="{{asset('images/partners/thales.png')}}" class="img-responsive p10">
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/partners/nbs.png')}}" class="img-responsive p11">
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/partners/verifone.png')}}" class="img-responsive p12">
            </div>
        </div>

    </div>
</div>
<script>
    @for ($i=1;$i<13;$i++)

    $(function () {
        $(".p"+{{$i}}).hover(
            function () {
                $('.p'+{{$i}},this).stop(true,true).fadeIn("fast");
                $('.n'+{{$i}}).addClass('green-back');
            },
            function () {
                $('.p'+{{$i}},this).stop(true,true).fadeOut("fast");
                $('.n'+{{$i}}).removeClass('green-back');
            }
        )
    });

    $(function () {
        $(".n"+{{$i}}).hover(
            function () {
                $('.n' +{{$i}}, this).stop(true, true).fadeIn("fast");
                $(".n" +{{$i}}).addClass('red');
            },
            function () {
                $('.n'+{{$i}},this).stop(true,true).fadeOut("fast");
                $('.n'+{{$i}}).removeClass('red');
            }
        )
    });

    @endfor


</script>

@include('include.footer')