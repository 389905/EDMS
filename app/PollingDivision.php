<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DivSec;

class PollingDivision extends Model
{
    protected $fillable = [
        'name', 'district_id',
    ];

    public function district(){
      return $this->belongsTo(District::class);
    }

    public function divSec(){
      return $this->hasMany(DivSec::class);
    }
}
