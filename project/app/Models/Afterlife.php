<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afterlife extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'recyclable',
        'fixable',
        'movable',
        'eco_mobilier',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'afterlife_id');
    }
}
