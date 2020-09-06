<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GnDivision extends Model
{
    public function divSec(){
      return $this->belongsTo(DivSec::class);
    }
}
