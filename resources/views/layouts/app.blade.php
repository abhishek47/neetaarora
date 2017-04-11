
<!DOCTYPE html >
<html class="wide wow-animation" lang="{{ config('app.locale') }}">
<head>
<title>Neeta Arora | Vedas Academy Nashik, Motivational Speaker, Parenting Guide, Tarot Card Reader, Seminar Sessions</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/css/css.css?family=Roboto:100,300,400,500,700,900,300italic">
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<meta name="keywords" content="business, financial">
<meta name="description" content="This is some kind of awesome description about the best page in the world">
<link rel="icon" href="/images/1favicon.ico" type="image/x-icon">
</head>
<body>
<div class="page">
  <header class="rd-navbar-wrap">
    <nav data-layout="rd-navbar-fixed" data-focus-on-hover="false" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-md-stick-up-offset="157px" data-lg-stick-up-offset="157px" class="rd-navbar rd-navbar-default">
      <div class="rd-navbar-inner">
        <div class="rd-navbar-panel">
          <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"> <span></span> </button>
          <div class="brand rd-navbar-brand"> <a href="index.html"> <img class="img-responsive" src="/images/logo-light-158x37.png" alt="" width="158" height="37"> </a> </div>
          <div class="rd-navbar-aside">
            <ul class="inline-list group">
              <li>
                <div class="unit unit-horizontal unit-middle unit-spacing-sm">
                  <div class="unit-left"> <img src="/images/icon-clock-32x33.png" alt="" width="33" height="32"> </div>
                  <div class="unit-body"> <span class="text-bold text-gray-base reveal-block">Mon - Sun: 9:00 - 8:00</span> <span>Consultation</span> </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-middle unit-spacing-sm">
                  <div class="unit-left"> <img src="/images/icon-location-32x33.png" alt="" width="33" height="33"> </div>
                  <div class="unit-body">
                    <address class="contact-info">
                    <span class="text-bold text-gray-base reveal-block"> Vedas Academy</span> <span>Canada Corner, Nashik</span>
                    </address>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-middle unit-spacing-sm">
                  <div class="unit-left"> <img src="/images/icon-phone-32x33.png" alt="" width="33" height="32"> </div>
                  <div class="unit-body"> <a class="text-gray-base text-bold reveal-block" href="callto:#">(+91) 9422757888</a> <a href="/cdn-cgi/l/email-protection#092a"><span class="__cf_email__" data-cfemail="f891969e97b89c9d959794919693d6978a9f">vedastraininghub@gmail.com</span></a> </div>
                </div>
              </li>
              <li>
                <div class="header_socials unit unit-horizontal "> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> <a target="_blank" href="#"><i class="fa fa-instagram"></i></a> </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="rd-navbar-nav-wrap">
          <ul class="rd-navbar-nav">
            <li class="active"> <a href="/">Home</a> </li>
            <li> <a href="/about">About</a></li>
            <li> <a href="/courses">Courses</a> </li>
            <li> <a target="_blank" href="https://www.youtube.com/channel/UCv9ZT5PJjy59hObaHQs8tqw">Videos</a> </li>
            <li> <a href="/posts">Blog</a></li>
            <li> <a href="/contact">Contact</a> </li>

             <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
   
  @yield('content'); 




  <footer class="page-footer bg-ebony-clay">
    <div class="section section-md bg-bright-gray">
      <div class="shell text-left">
        <div class="range range-xs-center range-50">
          <div class="cell-sm-6 cell-lg-3 text-center text-sm-left">
            
            <p>Vedas Academy is established in the year 1999 by dynamic personality Neeta Arora.The main object of the academy is to impart training to people belonging to all segments in the society till date Vedas Academy has trained lakhs of people. </p>
            <div class="group group-xl"> <span class="small text-italic">Follow Us:</span>
              <ul class="inline-list">
                <li> <a href="https://www.facebook.com/mrsneetaarora/" target="_blank" class="icon icon-xxs icon-circle icon-dark icon-white-filled fa-facebook"></a> </li>
                <li> <a href="" class="icon icon-xxs icon-circle icon-dark icon-white-filled fa-twitter"></a> </li>
                <li> <a href="https://www.youtube.com/channel/UCv9ZT5PJjy59hObaHQs8tqw" target="_blank" class="icon icon-xxs icon-circle icon-dark icon-white-filled fa-youtube"></a> </li>
              </ul>
            </div>
          </div>
          <div class="cell-sm-6 cell-lg-3">
            <h4>Navigation</h4>
            <hr class="hr bg-shuttle-gray inset-lg-right-70">
            <ul class="footer-navigation">
              <li> <a href="/">Home</a> </li>
              <li> <a href="/about">About</a> </li>
              <li> <a href="/posts">Blog</a> </li>
              <li> <a href="/contact">Contact</a> </li>
              <li> <a href="/courses">Courses</a> </li>
              <li> <a href="/videos">Videos</a> </li>
            </ul>
          </div>
          <div class="cell-sm-6 cell-lg-3">
            <h4>Contact info</h4>
            <hr class="hr bg-shuttle-gray inset-lg-right-70">
            <address class="contact-info">
            <ul class="list">
              <li>
                <div class="unit unit-horizontal unit-spacing-md">
                  <div class="unit-left"> <span class="icon icon-sm fa-phone text-picton-blue"></span> </div>
                  <div class="unit-body"> <a href="callto:(+91)9422757888">(+91) 9422757888</a> </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-spacing-md">
                  <div class="unit-left"> <span class="icon icon-sm fa-envelope-o text-picton-blue" style="font-size: 20px"></span> </div>
                  <div class="unit-body"> <a href="/cdn-cgi/l/email-protection#dab3b4bcb59abebfb7b5b6b3b4b1f4b5a8bd"><span class="__cf_email__" data-cfemail="2e474048416e4a4b43414247404500415c49">vedastraininghub@gmail.com</span></a> </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-spacing-md">
                  <div class="unit-left"> <span class="icon icon-sm fa-clock-o text-picton-blue"></span> </div>
                  <div class="unit-body"> <span>Mon - Sun: 9:00 - 8:00</span> </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-spacing-md">
                  <div class="unit-left"> <span class="icon icon-sm fa-map-marker text-picton-blue"></span> </div>
                  <div class="unit-body"> <a href="#"> <span class="text-bold reveal-block"> Vedas Academy</span> <span> Canada Corner, Nashik</span> </a> </div>
                </div>
              </li>
            </ul>
            </address>
          </div>
          <div class="cell-sm-6 cell-lg-3">
            <h4>Subscribe</h4>
            <hr class="hr bg-shuttle-gray inset-lg-right-70">
            <p>Get motivational tips.</p>
            <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="" class="rd-mailform rd-mailform-inline">
              <div class="form-froup">
                <label for="footer-contact-email" class="form-label">E-mail</label>
                <input id="footer-contact-email" name="email" data-constraints="@Required @Email" class="form-input" type="email">
              </div>
              <button type="submit" class="button button-xs button-primary-filled">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="shell text-center rights">
      <p>©&nbsp; <span id="copyright-year">2017</span>&nbsp;Neeta Arora.Powered By <b><a target="_blank" href="http://www.trumpetstechnologies.com">Trumpets</a>.</b></p>
    </div>
  </footer>
</div>
<div id="form-output-global" class="snackbars"></div>
<script src="/js/core.min.js"></script> 
<script src="/js/scripts.js"></script>
<!-- Scripts -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=udlmn059umrh6h02jyxtcyslj0xed1gbqz1g6s1h2xe4062e"></script>
    <script>tinymce.init({
  selector: '#body',
  height: 500,
  plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
  content_css: [
    '//www.tinymce.com/css/codepen.min.css'
  ]
});</script>

</body>
</html>


