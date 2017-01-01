<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Item;
use Validator;

class CartController extends Controller
{
    public function add(Request $request){

    	 $validator = Validator::make($request->all(), [
            'qty'   => 'required',
            'id' => 'required|exists:items,id,status,1',
            'size'       => 'required',
        ]);
        if ($validator->fails()) {
            //validation error
            $data['error'] = $validator->errors()->all();
            return \Response::json($data, 422); // Status code here
        }
        //validate product is correct
        $item = Item::find($request->id);
        if ($item == '') {
            $data['error'] = 'Invalid product or inactive product please try again later';
            return \Response::json($data, 422); // Status code here
        }

        $product = $item->sizes->where('size',$request->size)->first();
        //get price
        $price = ($product['discount'] >0 ? $product['discount'] : $product['price']);

        $items = array(
            'id'       => $item->id,
            'name'     => $item->item_title,
            'price'    => $price,
            'options'  => [
                'size'  => $request->size,
            ],
            'qty' => $request->qty,
        );

        // Make the insert...
        $cart = Cart::add($items);//->associate(App\Item::classs);
    // Cart::associate($cart->rowId, \App\Item::class);



        $data['message'] = $item->item_title . " aded to your cart";
        $data['status']  = true;
        return \Response::json($data, 200); // Status code here

    }
    public function remove(Request $request){
    	Cart::remove($request->row_id);

    }
    public function index(){
    	return view('header_cart');
    }
}
