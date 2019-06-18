<div class="footer">
    <div class="col-md-12 footer-top">
        <div class="up">
            <a href="#top"> <i class="fa fa-arrow-up"></i></a>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="footer-menu">
                    <ul>
                        <li>Location: Jamal, Kathmandu</li>
                        <li>Contact: 01-555555  Fax: 55555111</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-social-icon">
                    <ul>
                        <li><i class="fa fa-facebook"></i> </li>
                        <li><i class="fa fa-twitter"></i> </li>
                        <li><i class="fa fa-linkedin"></i> </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">

        <img src="{{asset('images/logo/WDN-logo.png')}}" class="footer-img">
        <div class="col-md-7">
            <p class="text-right"><a href="#">Terms of Use</a><a href="#">Privacy Policy</a><a href="#">Home</a> <a href="#" style="border: none">Contact Us</a> </p>
        </div>
        <div class="col-md-5">
            <p class="text-center cp">Copyright © 2019, World Distribution Nepal</p>
        </div>

    </div>
</div>

//leave a message block
<div class="leave-message">
    <div class="rotate-text">
        <p>Leave A Message</p>
    </div>

    <div class="contact-form leave-message-contain">
        <span class="close close-btn">&times;</span>
        {!! Form::open(['action'=>'PagesController@sendContactMail','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
        <ul>
            <li>
                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
            </li>
            <li>
                <input type="text" class="form-control" name="email" placeholder="Email Address" required>
            </li>
            <li>
                <textarea class="form-control" name="body" style="height: 20px!important;" placeholder="Write Message"></textarea>
            </li>
            <li>
                <input class="submit form-control" value="Send Message" type="submit">
            </li>
        </ul>
        <input type="hidden" name="leave_a_message" value="1">
        {!! Form::close() !!}
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('.rotate-text').click(function(){
            console.log("Click");
            $('.leave-message-contain').removeClass('close-box').addClass('open-box');
            $(".leave-message").removeClass("right-0").addClass("right-slide");
        });
        $('.close-btn').click(function(){
            console.log("Here");
            $('.leave-message-contain').removeClass('open-box').addClass('close-box');
            $(".leave-message").removeClass("right-slide").addClass("right-0");
        });
    });
</script>
</body>
</html>