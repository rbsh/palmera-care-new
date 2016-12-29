<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class ProductDetailController extends Controller
{
    public function details($slug,$id){
    	$product = Item::where('id',$id)->active()->first(); 
    	$related =Item::Active()->get();
    	$upsell =Item::Active()->get();
    	return view("product_detail",compact('related','upsell','product'));
    }
}
