<section id="footer-bar">
    <div class="row">
        <div class="span3">
            <h4>Navigation</h4>
            <ul class="nav">
                <li><a href="{{ route('home') }}">Homepage</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="{{ route('cart') }}">Your Cart</a></li>
                {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
            </ul>
        </div>
        <div class="span4">
            {{--<h4>My Account</h4>--}}
            {{--<ul class="nav">--}}
                {{--<li><a href="#">My Account</a></li>--}}
                {{--<li><a href="#">Order History</a></li>--}}
                {{--<li><a href="#">Wish List</a></li>--}}
                {{--<li><a href="#">Newsletter</a></li>--}}
            {{--</ul>--}}
        </div>
        <div class="span5">
            <p class="logo"><img src="{{ asset('img/themes/logo.png') }}" class="site_logo" alt=""></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
            <br/>
            <span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
        </div>
    </div>
</section>
<section id="copyright">
    <span>Copyright 2013 bootstrappage template  All right reserved.</span>
</section>