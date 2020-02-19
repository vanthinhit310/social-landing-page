<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //
    protected $table = 'xaphuongthitran';
    protected $fillable = [
        'xaid',
        'name',
        'type',
        'maqh'
    ];

    public function district()
    {
        return $this->belongsTo(District::class,'maqh','maqh')->withDefault();
    }
}
