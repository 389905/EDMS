<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingDivision extends Model
{
    protected $fillable = [
        'name', 'district_id',
    ];

    public function district(){
      return $this->belongsTo(District::class);
    }
}
