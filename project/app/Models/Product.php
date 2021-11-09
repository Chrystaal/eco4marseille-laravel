<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'product_id');
    }
    public function afterlife()
    {
        return $this->hasMany('App\Afterlife', 'afterlife_id');
    }
    public function product_use()
    {
        return $this->hasMany('App\product_use', 'product_use_id');
    }
    public function distribution()
    {
        return $this->hasMany('App\distribution', 'distribution_id');
    }
    public function sub_assembly()
    {
        return $this->hasMany('App\sub_assembly', 'sub_assembly_id');
    }
}
