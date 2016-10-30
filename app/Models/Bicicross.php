<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bicicross extends Model
{
    
	public $table = "bicicrosses";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nombre",
		"estado",
		"ubicacion",
		"capacidad"
	];

	public static $rules = [
	    "nombre" => "required",
		"estado" => "required",
		"ubicacion" => "required",
		"capacidad" => "required"
	];

}
