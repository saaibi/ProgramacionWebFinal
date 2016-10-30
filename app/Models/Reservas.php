<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    
	public $table = "reservas";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "id_usuario",
	    "tipo_Escenario",
		"nombre_Escenario",
		"fecha",
		"estado_Reserva",
		"hora_Inicio",
		"hora_Fin"
	];

	public static $rules = [
	    "id_usuario" => "required",
		"nombre_Escenario" => "required",
		"fecha" => "required",
		"estado_Reserva" => "required",
		"hora_Inicio" => "required",
		"hora_Fin" => "required"
	];

}
