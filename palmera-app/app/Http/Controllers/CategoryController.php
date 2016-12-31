<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CategoryController extends Controller
{
    public function index(){
    	$items = Item::active()->paginate(2);
    	return view('category',compact('items'));
    }
}
