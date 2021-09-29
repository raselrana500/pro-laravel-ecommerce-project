<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'catId', 'subcategory_name'
    ];
}
