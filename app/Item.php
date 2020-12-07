<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
    use SoftDeletes;
    protected $fillable = [
            'photo','codeno', 'name', 'price', 'discount', 'description', 'brand_id', 'subcategory_id'
        ];
}