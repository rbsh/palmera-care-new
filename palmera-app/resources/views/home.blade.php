@extends('layouts.app')

@section('content')

<!-- Slider -->
<div id="magik-slideshow" class="magik-slideshow">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12 col-md-12">
        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
          <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
            <ul>

            @foreach($latest as $row)
              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{url($row->photo)}}'><img src='{{url($row->photo)}}' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>{{$row->category->name}}</div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>{{$row->item_title}}</div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                <a href='{{url('category?id='.$row->category_id)}}' class="view-more">View More</a> 
                <a href='{{ route('product_detail',['title'=>$row->slug,'id'=>$row->id]) }}' class="buy-btn">Buy Now</a>
                </div>
                {{-- <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='150'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                  augue facilisis facilisis.</div> --}}
                {{-- <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div> --}}
              </li>
        @endforeach
            </ul>
            <div class="tp-bannertimer"></div>
          </div>
        </div>
      </div>
      <aside class="col-xs-12 col-sm-12 col-md-4">
        <div class="RHS-banner">
          <div class="add">

              <a href="#"><img alt="banner-img" src="{{url($single->photo)}}"></a>
          </div>
        </div>
      </aside>
    </div>
  </div>
</div>
<!-- end Slider --> 

<!-- main container -->
<div class="main-col">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="std"> 
          <!-- Best Seller Slider -->
          <div class="best-seller-pro wow bounceInUp animated">
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Best Seller</h2>
              </div>
              <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6"> 
                  
                  @each('componets.item', $items, 'item')

                </div>
              </div>
            </div>
          </div>
          <!-- End Best Seller Slider --> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end main container --> 

<!-- Featured Product Slider -->
<section class="featured-pro wow bounceInUp animated">
  <div class="container">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Featured Products</h2>
      </div>
      <div id="featured-product-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col6"> 
          
          @each('componets.item', $items, 'item')
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Featured Product Slider --> 

<!-- promo banner section -->
<div class="promo-banner-section wow bounceInUp animated">
  <div class="container">
    <div class="row">
      <div class="col"><img src="{{url('assets')}}/images/jewelry-banner.jpg" alt="promo-banner3"></div>
    </div>
  </div>
</div>
<!-- End promo banner section --> 

<!-- middle slider -->
<section class="small-product-slider">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="bag-product-slider small-pr-slider  wow bounceInLeft animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Bags</h2>
            </div>
            <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                  @each('componets.item', $items, 'item')
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="shoes-product-slider small-pr-slider  wow bounceInRight animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Shoes</h2>
            </div>
            <div id="bag-seller-slider1" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                @each('componets.item', $items, 'item')
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End middle slider --> 


@endsection
