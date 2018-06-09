<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boking extends Model
{
	protected $table='bokings';
    protected $fillable=array('tanggal_boking','nama','alamat','no_hp','id_mobil');

    public function mobil(){
    		return $this->belongsTo('App\mobil','id_mobil');
    	}
    	
}
