@extends('layouts.app')

@section('title',$product->item_title)

@section('content')




<!-- Main Container -->
<section class="main-container col1-layout">
  <div class="main container">
    <div class="col-main">
      <div class="row">
        <div class="product-view">
          <div class="product-essential">
            <form action="#" method="post" id="product_addtocart_form">
              <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
              <div class="product-img-box col-sm-4 col-xs-12 col-lg-5 wow bounceInLeft animated">
                <div class="new-label new-top-left"> New </div>
                
                
                
                
                <div class="product-image">
                    <div class="large-image"> <a href="p{{url($product->photo)}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img src="{{url($product->photo)}}"> </a> </div>
                    <div class="flexslider flexslider-thumb">
                      <ul class="previews-list slides">
                      @for($i=1;$i<5;$i++)

                        @if($product->{'image_'.$i}!="")
                        <li><a href='{{url($product->{'image_'.$i})}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{url($product->{'image_'.$i})}}' "><img src="{{url($product->{'image_'.$i})}}" alt = "Thumbnail 1"/></a></li>
                        @endif

                        @endfor
                      </ul>
                    </div>
                  </div>
                
                               
                <!-- end: more-images -->
                
                <div class="clear"></div>
              </div>
              <div class="product-shop col-sm-8 col-xs-12 col-lg-7 wow bounceInRight animated">
                <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                <div class="product-name">
                  <h1>{{$product->item_title}}</h1>
                </div>
                <div class="ratings">
                  <div class="rating-box">
                    <div style="width:60%" class="rating"></div>
                  </div>
                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                </div>
                <p class="availability in-stock pull-right"><span>In Stock</span></p>
                <div class="price-block">
                  <div class="price-box">
                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                    <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> AED {{$product->price_1}} </span> </p>
                  </div>
                </div>
                <div class="short-description">
                  <h2>Quick Overview</h2>
                  <p>{{$product->text}}</p>
                </div>
                <div class="add-to-box">
                 <div class="add-to-cart">
                    <label for="qty">Size:</label>
                    <div class="pull-left">
                       <div class="custom pull-left">
                        <select name="size" style="width: 150px;">
                            @foreach($product->sizes as $row)
                          <option value="{{$row['size']}}">{{$row['size']}}</option>
                          @endforeach;
                        </select>
                       </div>
                   </div>   
                   </div> 
                   <br><br><br>
                  <div class="add-to-cart">
                    <label for="qty">Quantity:</label>
                    <div class="pull-left">
                       
                      <div class="custom pull-left">
                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                      </div>
                    </div>
                    <div class="pull-left">
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <button  class="button btn-cart add_to_cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="email-addto-box">
                    <ul class="add-to-links">
                      <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
                      <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>
                    </ul>
                    <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="product-collateral wow bounceInUp animated">
          <div class="col-sm-12">
            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">

              @for($i=1;$i<7;$i++)
              <li class="{{($i==1?"active":"")}}"> 
                  <a href="#product_tabs_{{$i}}" data-toggle="tab">
                   {{$product->{'tab_title_'.$i} }} 
                   </a>
                </li>
              @endfor
          
            </ul>
            <div id="productTabContent" class="tab-content">

             @for($i=1;$i<7;$i++)

                 <div class="tab-pane fade in {{($i==1?"active":"")}}" id="product_tabs_{{$i}}">
                <div class="std">
                  <p>{{$product->{'tab_text_'.$i} }} </p>
                </div>
              </div>

              @endfor

             
              <div class="tab-pane fade" id="product_tabs_tags">
                <div class="box-collateral box-tags">
                  <div class="tags">
                    <form id="addTagForm" action="#" method="get">
                      <div class="form-add-tags">
                        <label for="productTagName">Add Tags:</label>
                        <div class="input-box">
                          <input class="input-text" name="productTagName" id="productTagName" type="text">
                          <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                        </div>
                        <!--input-box--> 
                      </div>
                    </form>
                  </div>
                  <!--tags-->
                  <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="reviews_tabs">
                <div class="box-collateral box-reviews" id="customer-reviews">
                  <div class="box-reviews1">
                    <div class="form-add">
                      <form id="review-form" method="post" action="http://www.magikcommerce.com/review/product/post/id/176/">
                        <h3>Write Your Own Review</h3>
                        <fieldset>
                          <h4>How do you rate this product? <em class="required">*</em></h4>
                          <span id="input-message-box"></span>
                          <table id="product-review-table" class="data-table">
                            <colgroup>
                            <col>
                            <col width="1">
                            <col width="1">
                            <col width="1">
                            <col width="1">
                            <col width="1">
                            </colgroup>
                            <thead>
                              <tr class="first last">
                                <th>&nbsp;</th>
                                <th><span class="nobr">1 *</span></th>
                                <th><span class="nobr">2 *</span></th>
                                <th><span class="nobr">3 *</span></th>
                                <th><span class="nobr">4 *</span></th>
                                <th><span class="nobr">5 *</span></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="first odd">
                                <th>Price</th>
                                <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                              </tr>
                              <tr class="even">
                                <th>Value</th>
                                <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                              </tr>
                              <tr class="last odd">
                                <th>Quality</th>
                                <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                              </tr>
                            </tbody>
                          </table>
                          <input type="hidden" value="" class="validate-rating" name="validate_rating">
                          <div class="review1">
                            <ul class="form-list">
                              <li>
                                <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                <div class="input-box">
                                  <input type="text" class="input-text" id="nickname_field" name="nickname">
                                </div>
                              </li>
                              <li>
                                <label class="required" for="summary_field">Summary<em>*</em></label>
                                <div class="input-box">
                                  <input type="text" class="input-text" id="summary_field" name="title">
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="review2">
                            <ul>
                              <li>
                                <label class="required label-wide" for="review_field">Review<em>*</em></label>
                                <div class="input-box">
                                  <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                </div>
                              </li>
                            </ul>
                            <div class="buttons-set">
                              <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                  <div class="box-reviews2">
                    <h3>Customer Reviews</h3>
                    <div class="box visible">
                      <ul>
                        <li>
                          <table class="ratings-table">
                            <colgroup>
                            <col width="1">
                            <col>
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>Value</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Quality</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Price</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="review">
                            <h6><a href="#">Excellent</a></h6>
                            <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                            <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                          </div>
                        </li>
                        <li class="even">
                          <table class="ratings-table">
                            <colgroup>
                            <col width="1">
                            <col>
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>Value</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Quality</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Price</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:80%;"></div>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="review">
                            <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                            <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                            <div class="review-txt"> Minimalism is the online ! </div>
                          </div>
                        </li>
                        <li>
                          <table class="ratings-table">
                            <colgroup>
                            <col width="1">
                            <col>
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>Value</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Quality</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Price</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:80%;"></div>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="review">
                            <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                            <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                            <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom">
                <div class="product-tabs-content-inner clearfix">
                  <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                    simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when 
                    an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the 
                    leap into electronic typesetting, remaining essentially unchanged. It 
                    was popularised in the 1960s with the release of Letraset sheets 
                    containing Lorem Ipsum passages, and more recently with desktop 
                    publishing software like Aldus PageMaker including versions of Lorem 
                    Ipsum.</span></p>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom1">
                <div class="product-tabs-content-inner clearfix">
                  <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem     
                    
                    Lorem Ipsumis
                    simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when 
                    an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the 
                    leap into electronic typesetting, remaining essentially unchanged. It 
                    was popularised in the 1960s with the release of Letraset sheets 
                    containing Lorem Ipsum passages, and more recently with desktop 
                    publishing software like Aldus PageMaker including versions of Lorem 
                    Ipsum.</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Main Container End --> 
<!-- Related Product Slider -->
<section class="slider-items-products wow bounceInDown animated">
  <div class="container">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Related Products</h2>
      </div>
      <div id="related-products-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          
            @each('componets.item', $related, 'item')
          
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Related Product Slider End --> 
<!-- Upsell Product Slider -->
<section class="upsell-pro">
  <div class="container">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Upsell Products</h2>
      </div>
      <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          
         
          @each('componets.item', $upsell, 'item')
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Upsell Product Slider End --> 


@stop