<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FutbolDoce extends Model
{
    
	public $table = "futbol_doces";

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

}
