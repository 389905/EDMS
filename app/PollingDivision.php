<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingDivision extends Model
{
    public function district(){
      return $this->belongsTo(District::class);
    }
}
