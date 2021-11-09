<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raw_material extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'weight','material','origin',
        'transformation_location','transportation_means_raw',

    ];

    public function sub_assembly()
    {
        return $this->belongsToMany(Sub_assembly::class, 'sub_assenbly_id');
    }
}
