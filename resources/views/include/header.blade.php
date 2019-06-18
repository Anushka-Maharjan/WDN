<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/grassroot.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnify.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('js/jqzoom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<header>
    <nav>
        <div class="menu-icon">
            <div class="mb-search">
                <input type="text" placeholder="Search..">
                <i class="fa fa-search" style="color: #4197ba; position: relative;left:-20px; padding-top: 2%;padding-left:1%"></i>
            </div>
            <i class="fa fa-user login-mb"></i>
            <i class="fa fa-bars fa-2x"></i>
        </div>

        <div class="logo">
            <a href="/"> <img src="{{asset('images/logo/name.png')}}" class="logo-img"></a>
        </div>
        <div class="menu">
            <ul>
                <li class="nav-heading about-us"><a href="#">About Us</a>
                    <div class="about-us-detail">
                        <div class="menu-arrow-up"></div>
                        <ul class="product-menu-detail" style="border: none">
                            <a href="about-us"> <li class="product-menu-detail">About WDN</li></a>
                            <a href="partners"> <li class="product-menu-detail">Partners</li></a>
                            <a href="customers"> <li class="product-menu-detail">Customers</li></a>
                        </ul>
                    </div>

                </li>
                <li class="nav-heading product-menu"><a href="#news">Products</a>
                    <div class="product-menu-op">
                        <div class="menu-arrow-up"></div>

                        <!--                        <div style="position: absolute">-->
                        <ul class="pd-menu">
                            <li class="product-menu-detail">DELL
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <a href="products.php"> <li class="product-menu-detail-in">Storage</li></a>
                                        <li class="product-menu-detail-in">Server</li>
                                        <li class="product-menu-detail-in">Converged Infrastructure</li>
                                        <li class="product-menu-detail-in">Networking</li>
                                        <li class="product-menu-detail-in">Data Protection</li>
                                        <li class="product-menu-detail-in">Security</li>
                                        <li class="product-menu-detail-in">Dell Products</li>

                                    </ul>
                                </div>
                            </li>
                            <li class="product-menu-detail">SUN, ORACLE
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <li class="product-menu-detail-in"> Server</li>
                                        <li class="product-menu-detail-in">Storage</li>
                                        <li class="product-menu-detail-in">Software</li>
                                        <li class="product-menu-detail-in">Oracle Engineered System</li>
                                    </ul>
                                </div></li>
                            <li class="product-menu-detail">DIEBOLD
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <li class="product-menu-detail-in">System</li>
                                        <li class="product-menu-detail-in">Recyclers</li>
                                        <li class="product-menu-detail-in">Teller Automation</li>
                                        <li class="product-menu-detail-in">Kiosks</li>
                                        <li class="product-menu-detail-in">Resource Library</li>

                                    </ul>
                                </div></li>
                            <li class="product-menu-detail">TOSHIBA
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <li class="product-menu-detail-in">Mono</li>
                                        <li class="product-menu-detail-in">Color</li>
                                        <li class="product-menu-detail-in">Hybrid</li>
                                    </ul>
                                </div></li>
                            <li class="product-menu-detail">GEMALTO
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <li class="product-menu-detail-in">2-Factor Authentication Products</li>
                                        <li class="product-menu-detail-in">Data Encryption</li>
                                        <li class="product-menu-detail-in">Data Protection</li>
                                        <li class="product-menu-detail-in">Access Management</li>
                                        <li class="product-menu-detail-in">Hardware Security Modules</li>

                                    </ul>
                                </div></li>
                            <li class="product-menu-detail">NBS TECH
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <li class="product-menu-detail-in">EMV Card Personalization Software</li>
                                    </ul>
                                </div></li>
                            <li class="product-menu-detail">CISCO
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <a href="product-new.php"> <li class="product-menu-detail-in">Networking</li></a>
                                        <li class="product-menu-detail-in">Routing</li>
                                        <li class="product-menu-detail-in">Security Products</li>
                                    </ul>
                                </div></li>
                            <li class="product-menu-detail">JUNIPER
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <li class="product-menu-detail-in">Networking and Security Products</li>
                                    </ul>
                                </div></li>
                            <li class="product-menu-detail">F5
                                <div class="pd-menu-detail-none">
                                    <ul  class="pd-sub-menu">
                                        <li class="product-menu-detail-in">Networking Products</li>
                                        <li class="product-menu-detail-in">Load balancer</li>
                                        <li class="product-menu-detail-in">DNS</li>
                                        <li class="product-menu-detail-in">NAT</li>
                                        <li class="product-menu-detail-in">Policy Management</li>
                                        <li class="product-menu-detail-in">Network Security Solutions</li>


                                    </ul>
                                </div></li>



                        </ul>
                        <!--                        </div>-->
                    </div>
                </li>
                <li class="nav-heading"><a href="news-events">News/Events</a> </li>



                <li class="nav-heading"><a href="download">Downloads</a></li>
                <li class="nav-heading"><a href="contact-us">Contact Us</a> </li>

                <li class="nav-heading user-name-header" style="float: right">
                    <!--                        <img src="images/pp.JPG"  class="dropdown-toggle dropbtn profile-img-header" data-toggle="dropdown"  aria-expanded="true">-->
                    <a class="usr" ><i class="fa fa-user " aria-hidden="true" style="font-size: 22px"></i></a>

                    <div id="myDropdown" class="dropdown-content ">
                        <div class="arrow-up"></div>
                        <div class="col-md-12 pad-top no-side-pad ">
                            <ul class="no-pad">
                                <li><i class="fa fa-user"> <input type="text" placeholder="Username"></i></li>
                                <li><i class="fa fa-lock"><input type="password" placeholder="Password"></i> </li>
                                <li><button class="btn btn-primary" style="width:100%">Login</button></li>
                            </ul>
                        </div>

                    </div>

                </li>
                <li class="nav-heading mb-none" style="float: right"><i class="fa fa-search" aria-hidden="true" style="font-size: 22px"></i>
                    <ul class="menu-detail search">
                        <li><input type="text" placeholder="Search..">
                            <button class="btn btn-primary">Search</button></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<script type="text/javascript">
    $(document).ready(function () {
        $(".fa-bars").on("click",function () {
            $("nav ul").toggleClass("showing");
        });

    });
    $(window).on("scroll", function () {
        if ($(window).scrollTop()){
            $("nav").addClass('black');
        }
        else{
            $("nav").removeClass('black');

        }
    });
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    $(function () {
        $(".about-us").hover(
            function () {
                $('.about-us-detail',this).stop(true,true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.about-us-detail',this).stop(true,true).fadeOut("fast");
                $(this).toggleClass('open');
            }
        )

    });
    $(function () {
        $(".nav-heading").hover(
            function () {
                $('.menu-detail',this).stop(true,true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.menu-detail',this).stop(true,true).fadeOut("fast");
                $(this).toggleClass('open');
            }
        )

    });
    //    uncomment below function for 3 level menu
    //    $(function () {
    //        $(".product-menu-detail-in").hover(
    //            function () {
    //                $('.pd-menu-detail-in-none',this).stop(true,true).fadeIn("fast");
    //                $(this).toggleClass('open');
    //            },
    //            function () {
    //                $('.pd-menu-detail-in-none',this).stop(true,true).fadeOut("fast");
    //                $(this).toggleClass('open');
    //            }
    //        )
    //
    //    });
    $(function () {
        $(".product-menu-detail").hover(
            function () {
                $('.pd-menu-detail-none',this).stop(true,true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.pd-menu-detail-none',this).stop(true,true).fadeOut("fast");
                $(this).toggleClass('open');
            }
        )

    });
    $(function () {
        $(".product-menu").hover(
            function () {
                $('.product-menu-op',this).stop(true,true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.product-menu-op',this).stop(true,true).fadeOut("fast");
                $(this).toggleClass('open');
            }
        )

    });
    $(function () {
        $(".user-name-header").hover(
            function () {
                $('.dropdown-content',this).stop(true,true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-content',this).stop(true,true).fadeOut("fast");
                $(this).toggleClass('open');
            }
        )

    });
    $(function () {
        $('#dell').click(function () {
//            $('#dell').addClass("green");
            $('#dell-sub').slideToggle();
        });
        $('#toshiba').click(function () {
            $('#toshiba-sub').slideToggle();
        });
        $('#diebold').click(function () {
            $('#diebold-sub').slideToggle();
        });
        $('#sun').click(function () {
            $('#sun-sub').slideToggle();
        });
        $('#gemalto').click(function () {
            $('#gemalto-sub').slideToggle();
        });
        $('#nbs').click(function () {
            $('#nbs-sub').slideToggle();
        });
        $('#juniper').click(function () {
            $('#juniper-sub').slideToggle();
        });
        $('#cisco').click(function () {
            $('#cisco-sub').slideToggle();
        });
        $('#f5').click(function () {
            $('#f5-sub').slideToggle();
        });


    });
</script>
</body>
</html>