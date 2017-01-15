<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
    	if(isset($request->range)!=null){
    		if($request->range=="0"){
		    	$items = Item::active()->where('category_id',$request->id)
		    						   ->where('price_1','>','0')
		    						   ->where('price_1','<','1000')->paginate(24);
    		} else {
		    	$items = Item::active()->where('category_id',$request->id)
		    						   ->where('price_1','>','1000')->paginate(24);

    		}
    	} else {
    		$items = Item::active()->where('category_id',$request->id)->paginate(24);
    	}
    	$category = Category::find($request->id);
    	return view('category',compact('items','category'));
    }
}
