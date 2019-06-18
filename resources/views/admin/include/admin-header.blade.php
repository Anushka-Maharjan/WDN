<html>
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/login.css')}}">

    <link rel="stylesheet" href="{{asset('admin/css/sidebar.css')}}">
</head>

<body>

<div id="wrapper">
    <!--        Horizontal Header-->
    <div class="header ">
        <img src="{{asset('images/logo/name.png')}}" class="logo">
        {{--<img src="{{{asset('images/logo/WDN-logo.png')}}}" class="logo">--}}
        <div class="dropdown user-account">
            <a class="user-name-header" onclick="myFunction()"> Settings <b class="caret"></b></a>

            <div id="myDropdown" class="dropdown-content">
                <div class="col-md-12 pad-top no-side-pad ">
                    <ul class="no-pad">
                        <li class="bottom-mark"><a href="#">Change Password</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!--        Header Ends here-->
    <!--        Default side nav bar starts-->
    <div id ="default-sidebar" class="default"  onmouseover="detail()" >
        <ul class="sidebar-nav-default">
            <li><a href="{{url('admin/product')}}"><span class="nav-icon fa fa-desktop"></span></a></li>
            <li><a href="{{url('admin/downloads')}}"><span class="nav-icon fa fa-download"></span></a></li>
            <li><a href="{{url('admin/services')}}"><span class="nav-icon fa fa-handshake-o"></span></a></li>
            <li><a href="{{url('admin/promotions')}}"><span class="nav-icon fa fa-send"></span></a></li>
            <li><a href="{{url('admin/news')}}"><span class="nav-icon fa fa-newspaper-o"></span></a></li>


        </ul>
    </div>

    <!--        Default side nav bar ends here-->
    <!--Discriptive side navbar on clicking logo starts-->
    <div class="detail" id="detail-sidebar" onmouseover="detail()" onmouseout="defaultSidebar()" >
        <ul class="sidebar-nav">
            <li><a href="{{url('admin/product')}}"><span class="fa fa-desktop nav-icon-desc"></span>Product</a></li>
            <li><a href="{{url('admin/downloads')}}"><span class="fa fa-download nav-icon-desc"></span>Downloads</a></li>
            <li><a href="{{url('admin/services')}}"><span class="fa fa-handshake-o nav-icon-desc"></span>Services</a></li>
            <li><a href="{{url('admin/promotions')}}"><span class="fa fa-send nav-icon-desc"></span>Promotions</a></li>
            <li><a href="{{url('admin/news')}}"><span class="fa fa-newspaper-o nav-icon-desc"></span>News/Events</a></li>
        </ul>

    </div>

    <!--discrptive side nav bar ends here-->
    <div id="page-content-wrapper">
    @include('admin.include.messages')


    <script>
        //        display detail sidebar onover
        function detail(e) {
            $("#detail-sidebar").show();
            $("#default-sidebar").hide();
            document.getElementById("page-content-wrapper").style.marginLeft="14%";
            document.getElementById("page-content-wrapper").style.width="86%";

        }
        //        display default sidebar on mouseout
        function defaultSidebar() {
            $("#detail-sidebar").hide();
            $("#default-sidebar").show();
            document.getElementById("page-content-wrapper").style.marginLeft="5%";
            document.getElementById("page-content-wrapper").style.width="95%";


        }
        //        script for logout starts

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.user-name-header')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        };

        //        script for logout ends
    </script>

