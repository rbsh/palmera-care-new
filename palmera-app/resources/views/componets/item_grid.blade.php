<li class="item item-animate last">
                <div class="item-inner">
                  <div class="product-wrapper">
                    <div class="thumb-wrapper">
                      <div class="new-label new-top-left">New</div>
                      <a href="{{ route('product_detail',['title'=>$item->slug,'id'=>$item->id]) }}" class="thumb flip"><span class="face"><img src="{{url($item->photo)}}" alt="pr_imgae" width="250"></span><span class="face back"><img  src="{{url($item->photo)}}" alt="pr_imgae" width="250"><span class="quick-view" data-product_id="34"><span><i>&nbsp;</i>Quick View</span></span></span></a></div>
                    <div class="actions"><span class="add-to-links"> <a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="#" title="Stablished fact reader">{{$item->item_title}}</a> </div>
                      <div class="item-content">
                        <div class="rating">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating" style="width:0%">&nbsp;</div>
                            </div>
                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                          </div>
                        </div>
                        <div class="item-price">
                          <div class="price-box">
                          
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ${{$item->price_1}}</span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="actions">
                      <form method="post">
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="size" value="{{$item->sizes->first()['size']}}">
                          <button  class="button btn-cart add_to_cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                          </form>
                    </div>
                  </div>
                </div>
              </li>