<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'quanhuyen';
    protected $fillable = [
        'maqh',
        'name',
        'type',
        'matp'
    ];

    public function city()
    {
        return $this->belongsTo(City::class,'matp','matp')->withDefault();
    }

    public function wards()
    {
        return $this->hasMany(Ward::class,'maqh','maqh');
    }
}
