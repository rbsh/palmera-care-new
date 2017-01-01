<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
    	$items = Item::active()->where('category_id',$request->id)->paginate(24);
    	$category = Category::find($request->id);
    	return view('category',compact('items','category'));
    }
}
