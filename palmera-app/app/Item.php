<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function scopeActive($query)
    {
        return $query->where('status', 1);
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
}
