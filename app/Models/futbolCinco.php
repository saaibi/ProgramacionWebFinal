<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class futbolCinco extends Model
{
    
	public $table = "futbol_cincos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nombre",
		"estado",
		"tipoDePiso",
		"ubicacion"
	];

	public static $rules = [
	    "nombre" => "required",
		"estado" => "required",
		"tipoDePiso" => "required",
		"ubicacion" => "required"
	];
	
	  public function reservas()
    {
        return $this->hasMany('App\Models\Reservas');
    }
}
