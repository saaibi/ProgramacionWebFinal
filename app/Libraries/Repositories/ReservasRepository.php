<?php

namespace App\Libraries\Repositories;


use App\Models\Reservas;
use Illuminate\Support\Facades\Schema;

class ReservasRepository
{

	/**
	 * Returns all Reservas
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Reservas::all();
	}

	public function search($input)
    {
        $query = Reservas::query();

        $columns = Schema::getColumnListing('reservas');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores Reservas into database
	 *
	 * @param array $input
	 *
	 * @return Reservas
	 */
	public function store($input)
	{
		return Reservas::create($input);
	}

	/**
	 * Find Reservas by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Reservas
	 */
	public function findReservasById($id)
	{
		return Reservas::find($id);
	}

	/**
	 * Updates Reservas into database
	 *
	 * @param Reservas $reservas
	 * @param array $input
	 *
	 * @return Reservas
	 */
	public function update($reservas, $input)
	{
		$reservas->fill($input);
		$reservas->save();

		return $reservas;
	}
}