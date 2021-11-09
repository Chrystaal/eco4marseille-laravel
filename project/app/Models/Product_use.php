<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_use extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'glue',
        'paint',
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_use_id');
    }
    public function lifespan()
    {
        return $this->hasMany('App\lifespan', 'lifespan_id');
    }
}
