@include('include.header')

<div id="page-content-wrapper">
    <div class="header-bg">
    </div>

    <div class="title-section-wrapper">
        <h3> Dell Printers</h3>
    </div>
    <div class="section-wrapper">
        @include('admin.include.messages')

        <div class="row">
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <button class="btn-select-details width100">View Details</button>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center">Printer Name</h4>
                    <img src="images/product/printer.jpg" class="img-responsive">
                    <h4 class="text-red text-center">Rs. 16,000</h4>

                    <p class="text-center">Short Description</p>
                </div>
            </div>
            <div class="col-md-3 pnt">

                <div class="selected">
                    <div class="select-details">
                        <a href="/product-detail"><button class="btn-select-details width100">View Details</button></a>
                    </div>
                </div>

                <div class="product">
                    <h4 class="text-center">Printer Name</h4>
                    <img src="images/product/printer.jpg" class="img-responsive">
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
                    <img src="images/product/printer.jpg" class="img-responsive">
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
                    <img src="images/product/printer.jpg" class="img-responsive">
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
                    <img src="images/product/printer.jpg" class="img-responsive">
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
                    <img src="images/product/printer.jpg" class="img-responsive">
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
