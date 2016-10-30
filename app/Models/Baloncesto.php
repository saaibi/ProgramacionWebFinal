<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baloncesto extends Model
{
    
	public $table = "baloncestos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nombre",
		"estado",
		"tipoDePiso",
		"ubicacion",
		"capacidad"
	];

	public static $rules = [
	    "nombre" => "required",
		"estado" => "required",
		"tipoDePiso" => "required",
		"ubicacion" => "required",
		"capacidad" => "required"
	];

}
