<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class CheckoutController extends Controller
{
    public function cart(){
    	$recomends = Item::active()->get();
    	return view('cart',compact('recomends'));
    }
}
