<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GnDivision extends Model
{
    protected $fillable = [
        'name', 'div_sec_id',
    ];

    public function divSec(){
      return $this->belongsTo(DivSec::class);
    }

    public function villages(){
      return $this->hasMany(Village::class);
    }
}
