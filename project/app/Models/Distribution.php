<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'transportation_means_dis',
        'conditioning',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'distribution_id');
    }

}
