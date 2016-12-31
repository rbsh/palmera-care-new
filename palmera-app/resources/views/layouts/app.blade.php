<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->
{{-- <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" /> --}}
{{-- <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" /> --}}
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title','Palmera Care')</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/revslider.css" media="all">
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/animate.css">
<link rel="stylesheet" type="text/css" href="{{url('assets')}}/lib/toastr/toastr.min.css">

 <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<!-- Header -->
    @include("layouts.header")
<!-- end header --> 

<!-- Navbar -->
    @include('layouts.navbar')
<!-- end nav --> 

<!-- header service -->
<div class="header-service">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-truck">&nbsp;</div>
          <span class="hidden-xs">FREE SHIPPING on order over $99</span></div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-support">&nbsp;</div>
          <span class="hidden-xs">Customer Support Service</span></div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-money">&nbsp;</div>
          <span class="hidden-xs">3 days Money Back Guarantee</span></div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-dis">&nbsp;</div>
          <span class="hidden-xs">5% discount on order over $199</span></div>
      </div>
    </div>
  </div>
</div>
<!-- End header service --> 

 @yield('content')


<!-- Footer -->
<footer>
{{--   <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="{{url('assets')}}/images/b-logo.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="newsletter-wrap">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
          <div class="newsletter">
            <form>
              <div>
                <h4><span>newsletter</span></h4>
                <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text" placeholder="Enter your email address">
                <button type="submit" title="Subscribe" class="subscribe"><span>Subscribe</span></button>
              </div>
            </form>
          </div>
          <!--newsletter--> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
          <div class="inner">
            <div class="social pull-right">
              <ul class="link">
                <li class="fb pull-left"><a href="#"></a></li>
                <li class="tw pull-left"><a href="#"></a></li>
                <li class="googleplus pull-left"><a href="#"></a></li>
                <li class="rss pull-left"><a href="#"></a></li>
                <li class="pintrest pull-left"><a href="#"></a></li>
                <li class="linkedin pull-left"><a href="#"></a></li>
                <li class="youtube pull-left"><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3">
          <div class="footer-column-1 pull-left">
            <div class="footer-logo"><a href="#" title="Logo"><img src="{{url('assets')}}/images/footer-logo.png" alt="footer logo"></a></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu, placerat ut odio vel, ultrices vehicula erat. Ut mauris diam, egestas nec lacus sit amet. </p>
            <div class="payment-accept">
              <div><img class="first" src="{{url('assets')}}/images/payment-1.png" alt="payment-1"> <img src="{{url('assets')}}/images/payment-2.png" alt="payment-2"> <img src="{{url('assets')}}/images/payment-3.png" alt="payment-3"> <img src="{{url('assets')}}/images/payment-4.png" alt="payment-4"></div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
          <div class="footer-column pull-left">
            <h4>Shopping Guide</h4>
            <ul class="links">
              <li class="first"><a href="#" title="How to buy">How to buy</a></li>
              <li><a href="#" title="FAQs">FAQs</a></li>
              <li><a href="#" title="Payment">Payment</a></li>
              <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
              <li><a href="#" title="Where is my order?">Where is my order?</a></li>
              <li class="last"><a href="#" title="Return policy">Return policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
          <div class="footer-column pull-left">
            <h4>Style Advisor</h4>
            <ul class="links">
              <li class="first"><a title="Your Account" href="#">Your Account</a></li>
              <li><a title="Information" href="#">Information</a></li>
              <li><a title="Addresses" href="#">Addresses</a></li>
              <li><a title="Addresses" href="#">Discount</a></li>
              <li><a title="Orders History" href="#">Orders History</a></li>
              <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2  col-lg-2">
          <div class="footer-column pull-left">
            <h4>Information</h4>
            <ul class="links">
              <li class="first"><a href="#" title="Site Map">Site Map</a></li>
              <li><a href="#" title="Search Terms">Search Terms</a></li>
              <li><a href="#" title="Advanced Search">Advanced Search</a></li>
              <li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
              <li><a href="#" title="Suppliers">Suppliers</a></li>
              <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="footer-column-last pull-left">
            <h4>Contact us</h4>
            <address>
            <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
            &nbsp;CA 12345  USA
            </address>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
            <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="#">support@magikcommerce.com</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015. All Rights Reserved. Designed by <a href="#"> magikcommerce.com</a></div>
        <div class="col-sm-7 col-xs-12 company-links">
          <ul class="links">
            <li><a title="Magento Themes" href="#">Magento Themes</a></li>
            <li><a title="Premium Themes" href="#">Premium Themes</a></li>
            <li><a title="Responsive Themes" href="#">Responsive Themes</a></li>
            <li class="last"><a title="Magento Extensions" href="#">Magento Extensions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer --> 
<!-- JavaScript --> 
<script type="text/javascript" src="{{url('assets')}}/js/jquery.min.js"></script> 
<script type="text/javascript" src="{{url('assets')}}/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="{{url('assets')}}/js/common.js"></script> 
<script type="text/javascript" src="{{url('assets')}}/js/revslider.js"></script>
<script type="text/javascript" src="{{url('assets')}}/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="{{url('assets')}}/js/parallax.js"></script> 
<script type="text/javascript" src="{{url('assets')}}/lib/toastr/toastr.min.js"></script> 
<script type='text/javascript'>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 770,
                startheight: 460,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>

        <!-- gallery hear End -->
<script>

function load_cart(open_cart = false){
    $('.header_cart').load('{{url('cart')}}',function(){
        slideEffectAjax();        
    });
}
function delete_cart(row_id = false){
    $.post('{{url('cart/remove')}}', {row_id:row_id}, function(data, textStatus, xhr) {
      load_cart();
    });
}
jQuery(document).ready(function($) {
  load_cart();
});

    $(".add_to_cart").click(function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
         var $btn = $(this).button('loading')

      
    $.ajax({
        url     : "{{url('cart/add')}}",
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) {
            $btn.button('reset')
            toastr.success( json.message , "" ); 
            load_cart();
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
            $btn.button('reset')
             if(jqXhr.status  ==0) {
                  toastr.error( 'could not connect to server' , "Connection Error " );
             }
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
            toastr.error( errorsHtml , "Validation Error " );
        }
    })
    .done(function(response){})
    .fail(function( jqXHR, json ) {});

       
      
});



</script>
</body>
</html>

