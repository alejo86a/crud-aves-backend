<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tont_ave extends Model
{
    protected $fillable = [
        'CDAVE','DSNOMBRE_COMUN','DSNOMBRE_CIENTIFICO'
    ];
    
    public function paises()
    {
        return $this->belongsToMany('App\Tont_paise');
    }
}
