@include('include.header')

<div id="page-content-wrapper">
    <div class="toshiba-head">
        <div class="toshiba-head-grad"></div>
        <img src="{{asset('images/toshiba/toshiba-support.png')}}" class="img-responsive toshiba-frame">
        <div class="carousel slide" id="slider" data-ride ="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#slider"></li>
                <li data-slide-to="1" data-target="#slider"></li>
            </ol>
            <div class="carousel-inner index-bn">
                <div class="item active " id ="slide1">
                    <img src="{{asset('images/toshiba/toshiba-banner.png')}}" class="img-responsive" >
                </div>
                <div class="item" id ="slide2">
                    <img src="{{asset('images/toshiba/toshiba-banner2.png')}}" class="img-responsive" >
                </div>

            </div>
            <!--            <a class="left carousel-control" href="#slider" data-slide="prev" role="button">-->
            <!--                <span class="icon-prev"></span>-->
            <!--            </a>-->
            <!--            <a class="right carousel-control" href="#slider" data-slide="next" role="button">-->
            <!--                <span class="icon-next"></span>-->
            <!--            </a>-->

        </div>
    </div>

    <div class="title-section-wrapper">
        <h3> Mono</h3>
    </div>
    <div class="section-wrapper">
        <div class="row">
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <a href="product-detail"> <button class="btn-select-details width100">View Details</button></a>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center"> 2802 AM</h4>
                    <img src="{{asset('images/product/printer.jpg')}}" class="img-responsive">
                    <h4 class="text-red text-center">Rs. 16,000</h4>

                    <p class="text-center">Short Description</p>
                </div>
            </div>
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <button class="btn-select-details width100">View Details</button>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center">Printer Name</h4>
                    <img src="{{asset('images/product/printer.jpg')}}" class="img-responsive">
                    <h4 class="text-red text-center">Rs. 16,000</h4>

                    <p class="text-center">Short Description</p>
                </div>
            </div>
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <button class="btn-select-details width100">View Details</button>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center">Printer Name</h4>
                    <img src="{{asset('images/product/printer.jpg')}}" class="img-responsive">
                    <h4 class="text-red text-center">Rs. 16,000</h4>

                    <p class="text-center">Short Description</p>
                </div>
            </div>
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <button class="btn-select-details width100">View Details</button>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center">Printer Name</h4>
                    <img src="{{asset('images/product/printer.jpg')}}" class="img-responsive">
                    <h4 class="text-red text-center">Rs. 16,000</h4>
                    <p class="text-center">Short Description</p>
                </div>
            </div>
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <button class="btn-select-details width100">View Details</button>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center">Printer Name</h4>
                    <img src="{{asset('images/product/printer.jpg')}}" class="img-responsive">
                    <h4 class="text-red text-center">Rs. 16,000</h4>
                    <p class="text-center">Short Description</p>
                </div>
            </div>
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <button class="btn-select-details width100">View Details</button>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center">Printer Name</h4>
                    <img src="{{asset('images/product/printer.jpg')}}" class="img-responsive">
                    <h4 class="text-red text-center">Rs. 16,000</h4>

                    <p class="text-center">Short Description</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $(".pnt").hover(
            function () {
                $('.selected',this).stop(true,true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.selected',this).stop(true,true).fadeOut("fast");
                $(this).toggleClass('open');
            }
        )

    });
</script>

@include('include.footer')
