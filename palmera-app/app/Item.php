<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
class Item extends Model  
{
       // use Buyable;

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('id', 'desc');
    }

     public function getSlugAttribute()
    {
    	return str_slug($this->item_title);
    }

     public function getSizesAttribute()
    {
    	$price_sizes = [];
    	for($i=1;$i<5;$i++):
    		$price_sizes[] = [
    			'size'=>$this->{'size_'.$i},
    			'price'=>$this->{'price_'.$i},
    			'discount'=>$this->{'dis_price_'.$i},
    			'qty'=>$this->{'qty_'.$i},
    			'max'=>$this->{'max_'.$i},
    		];
    	endfor;
        $price_sizes = collect($price_sizes);
    	return $price_sizes->where('size','!=',null);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
