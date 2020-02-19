<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'tinhthanhpho';
    protected $fillable = [
        'matp',
        'name',
        'type'
    ];

    public function districts()
    {
        return $this->hasMany(District::class,'matp','matp');
    }
}
