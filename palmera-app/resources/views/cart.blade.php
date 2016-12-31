
  <div class="top-cart-contain pull-right"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"> <i class="glyphicon glyphicon-shopping-cart"></i>
                <div class="cart-box"><span class="title">cart</span><span id="cart-total">{{Cart::count()}} item</span></div>
                </a></div>
              <div>
                <div style="display: none;" class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">

                    @foreach(Cart::content() as $row)

                    <li class="item even"> <a class="product-image" href="#">
                        <img src="{{$row->image}}" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> 
                        <a href="#" title="Remove This Item" onClick="delete_cart('{{$row->rowId}}')" class="glyphicon glyphicon-remove">&nbsp;</a> 
                          <p class="product-name"> <a href="#">{{$row->name}}
                          {{ ($row->options->has('size') ? $row->options->size : '')}}</a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">${{$row->price}}</span> <span class="title-desc">Qty:</span> <strong>{{$row->qty}}</strong> </div>
                      </div>
                    </li>
                   @endforeach 
                   
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">${{Cart::subtotal()}}</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
