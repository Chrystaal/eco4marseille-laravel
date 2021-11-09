<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lifespan extends Model
{
    use HasFactory;
    
        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'guarantee',
        'resistance',

    ];

    public function product_use()
    {
        return $this->belongsTo(Product_use::class, 'lifespan_id');
    }

}

