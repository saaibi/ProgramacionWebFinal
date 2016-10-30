<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\futbolCinco;
use App\Models\FutbolDoce;
use App\Models\Baloncesto;
use App\Models\Voleibol;
use App\Models\Bicicross;

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
	    "tipo_Escenario"=> "required", 
		"nombre_Escenario" => "required",
		"fecha" => "required",
		"estado_Reserva" => "required",
		"hora_Inicio" => "required",
		"hora_Fin" => "required"
	];
	
	public static function getFutbolCinco(){
		return futbolCinco::where('estado','Disponible')->get();
	}
    public static function getFutbolDoce(){
		return FutbolDoce::where('estado', 'Disponible')->get();	
	}
	public static function getBaloncesto(){
		return Baloncesto::where('estado', 'Disponible')->get();	
	}
	public static function getVoleibol(){
		return Voleibol::where('estado', 'Disponible')->get();	
	}
	 public static function getBicicross(){
		return Bicicross::where('estado', 'Disponible')->get();	
	}

	public static function getReservas($idEs , $tipo){
		return Reservas::where('nombre_Escenario', '=' , $idEs)->where('tipo_Escenario', '=' , $tipo)->get();	
	}

}
