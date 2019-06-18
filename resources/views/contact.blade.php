@include('include.header')
<div class="header-bg">
</div>
<div class="title-section-wrapper no-side-pad wdn-color mb-none">

    <div class="col-md-6 ">
        <h3 class="text-white">Contact Us</h3>
    </div>
    <div class="col-md-6 ">
        <h3 class="text-white">Contact Information</h3>
    </div>
</div>
<div class="section-wrapper">
    @include('admin.include.messages')
    <div class="contact-page">
        <div class="col-md-6">
            <h2 class="wdn-color mb-show"> Contact Us </h2>

            <div class="contact-form">
                {!! Form::open(['action'=>'PagesController@sendContactMail','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                <ul>
                        <li>
                            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                        </li>
                        <li>
                            <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                        </li>
                        <li>
                            <textarea class="form-control" name="body" placeholder="Write Message"></textarea>
                        </li>
                        <li>
                            <input class="submit" value="Send Message" type="submit">
                        </li>
                    </ul>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-6" >
            <div class="contact-info" >
                <h2 class="wdn-color mb-show"> Contact Information </h2>
                <div>


                    <ul>
                        <li>
                            <div class="add-icon"> <i class="fa fa-white fa-map-marker"></i> </div>
                            <strong>Office Address</strong>
                            <p>Jamal,<br>Kathmandu, Nepal</p>
                        </li>
                        <li>
                            <div class="add-icon"> <i class="fa fa-white fa-phone"></i> </div>
                            <strong>Contact no.</strong>
                            <p >+977-1-4263600,<br> +977-1-4243706</p>
                        </li>
                        <li>
                            <div class="add-icon"> <i class="fa fa-white fa-envelope"></i> </div>
                            <strong>Email Address</strong>
                            <a href="mailto:wdn@gmail.com" style="font-size: inherit;text-transform: lowercase;"> <p>info@wdn.com.np</p></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="google-map">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.218063848989!2d85.31256011419696!3d27.710552682790613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1901f3aa1479%3A0x955f17c1a7e54761!2sWorld+Distribution+Nepal+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1556625478985!5m2!1sen!2snp" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@include('include.footer')