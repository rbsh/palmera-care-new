   <li class="item first">
                <div class="product-image"> <a href="{{ route('product_detail',['title'=>$item->slug,'id'=>$item->id]) }}"> <img class="small-image" src="{{url($item->photo)}}" width="230"> </a> </div>
                <div class="product-shop">
                  <h2 class="product-name"><a href="#">{{$item->item_title}}</a></h2>
                  <div class="price-box">
                 
                    <p class="special-price"> <span class="price-label"></span> <span class="price"> ${{$item->price_1}} </span> </p>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div style="width:50%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                  </div>
                  <div class="desc std">
                    <p>{{$item->short_desc}}
                    <br>
                      <a class="link-learn"  href="{{ route('product_detail',['title'=>$item->slug,'id'=>$item->id]) }}">Learn More</a> </p>
                  </div>
                  <div class="actions">

                  <form method="post">
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="size" value="{{$item->sizes->first()['size']}}">
                          <button  class="button btn-cart ajx-cart add_to_cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                         

                   
                    <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> 

 </form>
                    </div>


                </div>
              </li>