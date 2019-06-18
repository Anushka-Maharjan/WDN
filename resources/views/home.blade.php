@include('include.header')
<div class="carousel slide" id="slider" data-ride ="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#slider"></li>
        <li data-slide-to="1" data-target="#slider"></li>
        <li data-slide-to="2" data-target="#slider"></li>
    </ol>
    <div class="carousel-inner index-bn">
        <div class="item active bg2" id ="slide1">
            <div class="row bn-pad5">
                <div class="col-md-5 mb-no-side-pad">
                    <div class="col-md-10 mb-left-img mb-bn-inline mb-bn-bg-red">
                        <div class="col-md-9 mb-width45">
                            <img src="{{asset('images/product/dell-workstation.png')}}" class="img-responsive">
                        </div>
                        <div class="col-md-12 mb-width50">
                            <h3 class="text-center text-white ">Dell Workstations</h3>
                            <p class="text-center text-white mb-none">This is small description. This is small description.This is small description. </p>
                            <button class="btn-banner">More</button>
                        </div>

                    </div>
                    <div class="col-md-12 bn-pad7 mb-rt mb-bn-bg-red ">
                        <div class="row mb-bn-inline">
                            <div class="col-md-5 mb-bn-img-rt">
                                <img src="{{asset('images/product/dell-storage.png')}}" class="img-responsive">
                            </div>
                            <div class="col-md-7 mb-bn-lt-txt">
                                <h3 class="text-center text-white ">Dell Storage</h3>
                                <p class="text-center text-white mb-none">This is small description. This is small description.This is small description. </p>
                                <button class="btn-banner">More</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-7 bn-pad4 mb-no-side-pad" >
                    <div class="col-md-12 bn-pad10b mb-left-img mb-bn-bg-red">
                        <div class="row mb-bn-inline">
                            <div class="col-md-7 mb-width45">
                                <img src="{{asset('images/product/dell-laptop.png')}}" class="img-responsive">
                            </div>
                            <div class="col-md-5 mb-width50">
                                <h3 class="text-center text-white">Dell Laptops</h3>
                                <p class="text-center text-white mb-none">This is small description. This is small description.This is small description. </p>
                                <button class="btn-banner-light" >More</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 mb-rt mb-bn-bg-red ">
                        <div class="row mb-bn-inline">
                            <div class="col-md-5 mb-width50">
                                <h3 class="text-center text-black">Dell Servers</h3>
                                <p class="text-center text-black mb-none">This is small description. This is small description.This is small description. </p>
                                <button class="btn-banner-light">More</button>
                            </div>
                            <div class="col-md-5 mb-width45">
                                <img src="{{asset('images/product/dell-server.png')}}" class="img-responsive">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="item bg1" id ="slide2">-->
        <!--            <div class="row" style="padding-top: 5%">-->
        <!--                <div class="col-md-5">-->
        <!--                    <img src="images/toshiba-e-studio-2309a.png" class="img-responsive" style="height:50%; width:auto; margin-left:20%">-->
        <!--                    <h3 class="text-center ">Toshiba Printer</h3>-->
        <!--                    <p class="text-center">This is small description. This is small description.This is small description. </p>-->
        <!--                    <button class="btn-banner">More</button>-->
        <!---->
        <!--                </div>-->
        <!--                <div class="col-md-7" style="padding-top:4.5%">-->
        <!--                    <div class="col-md-12" style="padding-bottom: 10%">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-md-7">-->
        <!--                                <img src="images/Toshiba1 (1).png" style="height:30%; width:auto; margin-left:20%" class="img-responsive">-->
        <!--                            </div>-->
        <!--                            <div class="col-md-5">-->
        <!--                                <h3 class="text-center text-black">Toshiba Printers</h3>-->
        <!--                                <p class="text-center text-black">This is small description. This is small description.This is small description. </p>-->
        <!--                                <button class="btn-banner-light" >More</button>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!---->
        <!--                    </div>-->
        <!--                    <div class="col-md-12">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-md-5">-->
        <!--                                <h3 class="text-center text-black">Dell Servers</h3>-->
        <!--                                <p class="text-center text-black">This is small description. This is small description.This is small description. </p>-->
        <!--                                <button class="btn-banner-light">More</button>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-5">-->
        <!--                                <img src="images/eS2802AM_ADF_L_NGB (1).png" class="img-responsive">-->
        <!---->
        <!--                            </div>-->
        <!--                        </div>-->
        <!---->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="item bg3" id ="slide3">-->
        <!--            <div class="row" style="padding-top: 5%">-->
        <!--                <div class="col-md-8">-->
        <!--                    <img src="images/dell-laptop.png" class="img-responsive">-->
        <!--                    <h3 class="text-center text-white">Dell Laptops</h3>-->
        <!--                    <p class="text-center text-white">This is small description. This is small description.This is small description. </p>-->
        <!--                    <button class="btn btn-danger" style="margin-left: 40%; width:100px">More</button>-->
        <!--                </div>-->
        <!--                <div class="col-md-4">-->
        <!--                    <img src="images/dell-workstation.png" class="img-responsive">-->
        <!--                    <h3 class="text-center text-black ">Dell Workstations</h3>-->
        <!--                    <p class="text-center text-black">This is small description. This is small description.This is small description. </p>-->
        <!--                    <button class="btn btn-danger" style="margin-left: 40%; width:100px">More</button>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
    <a class="left carousel-control" href="#slider" data-slide="prev" role="button">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#slider" data-slide="next" role="button">
        <span class="icon-next"></span>
    </a>

</div>
<div class="bg-yellow">
    <div class="container">
        @include('admin.include.messages')
        <div class="service-block">
            <h3 class="text-center">Our  Services</h3>

            <div class="col-md-12 no-side-pad">
                <div class="row">
                    <div class="width23 services">
                        <i class="fa fa-list text-center service-icon"></i>
                        <h4 class="service-title">Business System Integaration</h4>
                        <p class="text-center">Systems Integrator Business of WDN, is a leading Nepal information technology solutions provider, specializing in IT solutions for the mainly Government... </p>
                        <button onclick="displaymodal(1)" class=" service-btn">Details</button>
                    </div>
                    <div class="width23 services">
                        <i class="fa fa-list text-center service-icon"></i>
                        <h4 class="service-title">Network Solutions</h4>
                        <p class="text-center"> WDN has the expertise to build simple Ethernet to complex Fiber Network and Wireless Networks for any type of organization... </p>
                        <button class=" service-btn" onclick="displaymodal(2)">Details</button>

                    </div>
                    <div class="width23 services">
                        <i class="fa fa-line-chart text-center service-icon"></i>
                        <h4 class="service-title">Service and Maintenance</h4>
                        <p class="text-center">We draw from our wide-ranging, deep-rooted expertise and industry experience to enable customer, deploy, consolidate, and  upgrade their IT infrastructure...</p>
                        <button class="service-btn" onclick="displaymodal(3)">Details</button>

                    </div>
                    <div class="width23 services">
                        <i class="fa fa-thumbs-up text-center service-icon"></i>
                        <h4 class="service-title">Technology Products Distribution</h4>
                        <p class="text-center"> At WDN, our aim is simple; to provide you with the most comprehensive range of innovative and market-leading products. Together with our...</p>
                        <button class=" service-btn" onclick="displaymodal(4)">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding-bottom:5%">
    <div class="container">
        <div class="product-section">
            <h3 class="text-center">Latest Products</h3>
            <div class="col-md-12">
                <div class="carousel " data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-2"><a href="#"><img src="{{asset('images/product/dell1.jpg')}}" class=""></a><p class="text-center prd-title">Laptop</p></div>
                        </div>
                        <div class="item">
                            <div class="col-md-2"><a href="#"><img src="{{asset('images/product/printer.jpg')}}" class=""></a><p class="text-center prd-title">Printer</p></div>
                        </div>
                        <div class="item">
                            <div class="col-md-2"><a href="#"><img src="{{asset('images/product/dell-server.png')}}" class=""></a><p class="text-center prd-title">Server</p></div>
                        </div>
                        <div class="item">
                            <div class="col-md-2"><a href="#"><img src="{{asset('images/product/dell-storage.png')}}" class=""></a><p class="text-center prd-title">Storage</p></div>
                        </div>
                        <div class="item">
                            <div class="col-md-2"><a href="#"><img src="{{asset('images/product/dell-laptop.png')}}" class=""></a><p class="text-center prd-title">Laptop</p></div>
                        </div>
                        <div class="item">
                            <div class="col-md-2"><a href="#"><img src="{{asset('images/product/dell-workstation.png')}}" class=""></a><p class="text-center prd-title">Workstation</p></div>
                        </div>

                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-prev" style="color:black; margin-right: 2%"></i></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-next" style="color:black;margin-left: 2%"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="bg-blue">
    <div class="container ">
        <div class="col-md-12 no-side-pad" style="margin-top:1%">
            <div class="row no-side-pad">
                <div class="col-md-8">
                    <h3 class="">Promotions</h3>
                    <div class="col-md-12 no-side-pad">
                        <div class="row">
                            <div class="col-md-12 no-side-pad">
                                <img src="{{asset('images/promotion/promo1.jpeg')}}" class="img-responsive">
                            </div>
                            <div class="col-md-6 no-side-pad">
                                <img src="{{asset('images/promotion/promo2.jpeg')}}" class="b2">
                            </div>
                            <div class="col-md-6 no-side-pad">
                                <img src="{{asset('images/promotion/promo3.jpeg')}}" class="b3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 testimonial">
                    <h3 class="text-center">Testimonial</h3>
                    <div id="testCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="img-box"><img src="{{asset('images/t1.jpg')}}" alt=""></div>
                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="{{asset('images/t2.jpg')}}" alt=""></div>
                                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                                <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="{{asset('images/t1.jpg')}}" alt=""></div>
                                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#testCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#testCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container partner-section">
    <h3 class="text-center">Partners</h3>
    <div class="carousel slide" id="partner-slider" data-ride ="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#partner-slider"></li>
            <li data-slide-to="1" data-target="#partner-slider"></li>
            <li data-slide-to="2" data-target="#partner-slider"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" id ="slide1">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/cisco.png')}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        <img src="{{'images/partners/deibold.png'}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/dell.png')}}" class="img-responsive">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/f5.png')}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/huawei.png')}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/juniper.png')}}" class="img-responsive">

                    </div>
                </div>
            </div>
            <div class="item" id ="slide2">
                <div class="row">

                    <div class="col-md-2">
                        <img src="{{asset('images/partners/matica.png')}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/nbs.png')}}" class="img-responsive">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/oracle.png')}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/thales.png')}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/verifone.png')}}" class="img-responsive">

                    </div>
                    <div class="col-md-2">
                        {{--<img src="{{asset('images/partners/nbs.png')}}" class="img-responsive">--}}
                    </div>
                </div>
            </div>



        </div>
        <a class="left carousel-control" href="#partner-slider" data-slide="prev" role="button">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#partner-slider" data-slide="next" role="button">
            <span class="icon-next"></span>
        </a>

    </div>

</div>

<div class="modal fade " id="service1" role="dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header modal-hdr">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="text-center text-white">Business System Integration	</h3>
        </div>
        <div class="modal-body">
            <img src="{{asset('images/banner/WDN-bg.jpg')}}" style="width:100%;height:150px; padding-bottom: 2%">
            <p>
                Systems Integrator Business of WDN, is a leading Nepal information technology solutions provider,
                specializing in IT solutions for the mainly Government, Private Sectors, Financials and Telecom
                industries. WDN also offers information technology infrastructure and consulting services. WDN
                provide Open standard based, cost-effective business integration services to integrate desired IT
                components developed across the different platform into a seamless, user-friendly, maintainable
                and upgradable IT infrastructure system for tangible and long term reduction in IT cost.
            </p>
            <p>
                For the Telecommunications industry, WDN architects deploy and maintains carrier-class IP based Next
                Generation Networks (NGN) for service providers,CRM and Billing Infrastructure and integrating
                complementary revenue generating solutions around them.
            </p>
            <p>
                In the Financials and Enterprise space, WDN uses the open standard based, scalable infrastructure as
                the platform to architect, deploy and maintain its solutions. Businesses leverage on this to offer
                value-added services to their customers while lowering cost and improving their productivity.
            </p>
        </div>
    </div>
</div>

<div class="modal fade " id="service2" role="dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header modal-hdr">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="text-center text-white"> Network Solutions</h3>
        </div>
        <div class="modal-body">
            <img src="{{asset('images/banner/WDN-bg.jpg')}}" style="width:100%;height:150px; padding-bottom: 2%">
            <p>
                WDN has the expertise to build simple Ethernet to complex Fiber Network and Wireless Networks for
                any type of organization. We have wide expertise in setting up and managing all range of switches,
                routers, wireless networks, VPN, security and network management solutions.
            </p>
        </div>
    </div>
</div>


<div class="modal fade " id="service3" role="dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header modal-hdr">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="text-center text-white"> Service & Maintenance</h3>
        </div>
        <div class="modal-body">
            <img src="{{asset('images/banner/WDN-bg.jpg')}}" style="width:100%;height:150px; padding-bottom: 2%">
            <p>
                We draw from our wide-ranging, deep-rooted expertise and industry experience to enable
                customer, deploy, consolidate, and upgrade their IT infrastructure in timely,
                cost-effective and SLA (Service Level Agreement) based deployment and maintenance.
            </p>
            <p>
                WDN's process-driven project management team consists of PMP (Project Management Professional)
                trained and certified professionals who ensure successful implementation of all our solutions.
                This is complemented by our certified support teams, who use proactive customer service
                initiatives to ensure system availability and capacity planning for the future growth of our
                clients.
            </p>
        </div>
    </div>
</div>

<div class="modal fade " id="service4" role="dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header modal-hdr">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="text-center text-white"> Technology Products Distribution</h3>
        </div>
        <div class="modal-body">
            <img src="{{asset('images/banner/WDN-bg.jpg')}}" style="width:100%;height:150px; padding-bottom: 2%">
            <p>
                At WDN, our aim is simple; to provide you with the most comprehensive range of innovative and market-leading products. Together with our unrivalled support packages, WDN’s unique blend of products and skills will provide you with an unbeatable opportunity to develop your own business, and generate additional revenue.
            </p>
            <p>
                WDN don’t just provide you with products, we provide you with the RIGHT products. We work with you to evaluate your requirements, and only offer the applications and services tailored to your needs. WDN provides you with a complete product solution and can configure and integrate products and systems on your behalf, saving you time and development resource. Furthermore, we provide full technical backup, including on-site services, meaning you and your customers can purchase with the confidence that full support is available when needed.
            </p>
        </div>
    </div>
</div>

<script>
    $('.carousel[data-type="multi"] .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>
<script>
    function displaymodal(id){
       $('#service'+id).modal('show');

    }
</script>

@include('include.footer')