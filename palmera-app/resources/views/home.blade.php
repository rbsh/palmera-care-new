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
              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{url('assets')}}/images/slider_img_2.jpg'><img src='{{url('assets')}}/images/slide-img.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Exclusive of designer</div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Handbags & Purses</div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='150'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                  augue facilisis facilisis.</div>
                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              </li>
              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{url('assets')}}/images/slider_img_2.jpg' class="black-text"><img src='{{url('assets')}}/images/slide-img.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>laptop Sale</div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Go Lightly</div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='150'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                  augue facilisis facilisis.</div>
                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              </li>
            </ul>
            <div class="tp-bannertimer"></div>
          </div>
        </div>
      </div>
      <aside class="col-xs-12 col-sm-12 col-md-4">
        <div class="RHS-banner">
          <div class="add"><a href="#"><img alt="banner-img" src="{{url('assets')}}/images/rhs-banner.jpg"></a></div>
        </div>
      </aside>
    </div>
  </div>
</div>
<!-- end Slider --> 
<!-- offer banner section -->

<div class="offer-banner-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInLeft animated"><a href="#"><img alt="offer banner1" src="{{url('assets')}}/images/offer-banner.jpg"></a></div>
      <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInUp animated"><a href="#"><img alt="offer banner2" src="{{url('assets')}}/images/offer-banner.jpg"></a></div>
      <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInRight animated"><a href="#"><img alt="offer banner3" src="{{url('assets')}}/images/offer-banner.jpg"></a></div>
    </div>
  </div>
</div>
<!-- end offer banner section --> 
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
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="sale-label sale-top-right">Sale</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="new-label new-top-right">New</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="sale-label sale-top-right">Sale</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                      <strong></strong> </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="sale-label sale-top-right">Sale</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="new-label new-top-right">New</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="sale-label sale-top-right">Sale</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="sale-label sale-top-right">Sale</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="new-label new-top-right">New</div>
                      <div class="item-inner">
                        <div class="product-wrapper">
                          <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                          <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:60%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions">
                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
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
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="new-label new-top-right">New</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
              <strong></strong> </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="new-label new-top-right">New</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="new-label new-top-right">New</div>
              <div class="item-inner">
                <div class="product-wrapper">
                  <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/product_265x322.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/product_265x322.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                  <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
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
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
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
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="product-wrapper">
                        <div class="thumb-wrapper"><a href="#" class="thumb flip"><span class="face"><img src="{{url('assets')}}/products-images/home_product_small.jpg" alt="pr_imgae" width="268"></span><span class="face back"><img src="{{url('assets')}}/products-images/home_product_small.jpg" title="pr_imgae" width="268" alt="Product image"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                        <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a href="#" title="Odio in pretium feugiat"> Odio in pretium feugiat </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End middle slider --> 

<!-- Latest Blog -->
<section class="latest-blog wow bounceInDown animated">
  <div class="container">
    <div class="row">
      <div class="blog-title">
        <h2><span>Latest Blog</span></h2>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="blog_inner">
          <div class="blog-img blog-l"> <img src="{{url('assets')}}/images/blog-img.jpg" alt="Blog image">
            <div class="mask"> <a class="info" href="#">Read More</a> </div>
          </div>
          <h2><a href="#">Pellentesque habitant morbi</a> </h2>
          <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="blog_inner">
          <div class="blog-img blog-l"> <img src="{{url('assets')}}/images/blog-img.jpg" alt="Blog image">
            <div class="mask"> <a class="info" href="#">Read More</a> </div>
          </div>
          <h2><a href="#">Pellentesque habitant morbi</a> </h2>
          <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="blog_inner">
          <div class="blog-img blog-l"> <img src="{{url('assets')}}/images/blog-img.jpg" alt="Blog image">
            <div class="mask"> <a class="info" href="#">Read More</a> </div>
          </div>
          <h2><a href="#">Pellentesque habitant morbi</a> </h2>
          <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Latest Blog --> 
@endsection
