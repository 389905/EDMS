<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function pollingDivisions(){
      return $this->hasMany(PollingDivision::class);
    }
}
