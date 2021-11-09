<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_assembly extends Model
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

    public function product()
    {
        return $this->belongsToMany(product::class);
    }
    public function raw_material()
    {
        return $this->hasMany('App\raw_material', 'raw_material_id_id');
    }
    public function sub_assembly()
    {
        return $this->hasMany('App\sub_assembly', 'sub_assembly_id');
    }
}
