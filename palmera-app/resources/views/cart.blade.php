@extends('layouts.app')

@section('content')

<!-- Main Container -->
<section class="main-container col1-layout">
  <div class="main container">
    <div class="col-main">
      <div class="cart">
        <div class="page-title">
          <h2>Shopping Cart</h2>
        </div>
        <div class="table-responsive">
          <form method="post" action="#">
            <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
            <fieldset>
              <table class="data-table cart-table" id="shopping-cart-table">
                <colgroup>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                </colgroup>
                <thead>
                  <tr class="first last">
                    <th rowspan="1">&nbsp;</th>
                    <th rowspan="1"><span class="nobr">Product Name</span></th>
                    <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                    <th class="a-center" rowspan="1">Qty</th>
                    <th colspan="1" class="a-center">Subtotal</th>
                    <th class="a-center" rowspan="1">&nbsp;</th>
                    <th rowspan="1">&nbsp;</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr class="first last">
                    <td class="a-right last" colspan="7"><button class="button btn-continue" title="Continue Shopping" type="button"><span><span>Continue Shopping</span></span></button>
                      <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span><span>Update Cart</span></span></button>
                      <button id="empty_cart_button" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span><span>Clear Cart</span></span></button></td>
                      </tr>
                </tfoot>
                <tbody>
                 @foreach(Cart::content() as $row)
                    {{-- {{dd($row)}} --}}
                    @php
                      $item = App\Item::find($row->id);
                    @endphp
                  <tr class="first odd item">
                    <td class="image"><a class="product-image" href="#"><img width="75" height="75" src="{{url($item->photo)}}"></a></td>
                    <td><h2 class="product-name"> <a href="#">{{$row->name}}  {{ ($row->options->has('size') ? $row->options->size : '')}}</a> </h2></td>
                    <td class="a-right"><span class="cart-price"> <span class="price">AED {{$row->price}}</span> </span></td>
                    <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="{{$row->qty}}" name="cart[15945][qty]"></td>
                    <td class="a-right movewishlist"><span class="cart-price"> <span class="price">AED {{$row->total}}</span> </span></td>
                    <td class="a-center"></td>
                    <td class="a-center last"><a class="button remove-item" onclick="delete_main_cart('{{$row->rowId}}')" title="Remove item" href="#"><span><span>Remove item</span></span></a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </fieldset>
          </form>
        </div>
        <!-- BEGIN CART COLLATERALS -->
        <div class="cart-collaterals row">
         
{{--           <div class="col-sm-8">
            <div class="discount">
            <h3>Discount Codes</h3>
            <form method="post" action="#" id="discount-coupon-form">
              <label for="coupon_code">Enter your coupon code if you have one.</label>
              <input type="hidden" value="0" id="remove-coupone" name="remove">
              <input type="text" name="coupon_code" id="coupon_code" class="input-text fullwidth">
              <button value="Apply Coupon" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
            </form>
          </div>
        </div> --}}
        <div class="totals col-sm-offset-8 col-sm-4">
          <h3>Shopping Cart Total</h3>
          <div class="inner">
            <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
              <colgroup>
              <col>
              <col>
              </colgroup>
              <tfoot>
                <tr>
                  <td colspan="1" class="a-left"><strong>Grand Total</strong></td>
                  <td class="a-right"><strong><span class="price">AED {{Cart::total()}}</span></strong></td>
                </tr>
                 
              </tfoot>
              <tbody>
                <tr>
                  <td colspan="1" class="a-left"> Subtotal </td>
                  <td class="a-right"><span class="price">AED {{Cart::subtotal()}}</span></td>
                </tr>
                <tr>
                  <td colspan="1" class="a-left"> Tax </td>
                  <td class="a-right"><span class="price">AED {{Cart::tax()}}</span></td>
                </tr>
              </tbody>
            </table>
            <ul class="checkout">
              <li>
                <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Proceed to Checkout</span></button>
              </li>
              {{-- <li><a title="Checkout with Multiple Addresses" href="#">Checkout with Multiple Addresses</a> </li> --}}
            </ul>
          </div>
          <!--inner--> 
          
        </div>
      </div>
      
      <!--cart-collaterals--> 
      
    </div>

  </div>
  </div>
  </section>
  <!-- Main Container End -->

@stop