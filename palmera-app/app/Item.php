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
}
