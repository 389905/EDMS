<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = [
        'name', 'gn_division_id',
    ];

    public function gnDivision(){
      return $this->belongsTo(GnDivision::class);
    }
}
