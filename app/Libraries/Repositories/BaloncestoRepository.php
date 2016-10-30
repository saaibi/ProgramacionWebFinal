<?php

namespace App\Libraries\Repositories;


use App\Models\Baloncesto;
use Illuminate\Support\Facades\Schema;

class BaloncestoRepository
{

	/**
	 * Returns all Baloncestos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Baloncesto::all();
	}

	public function search($input)
    {
        $query = Baloncesto::query();

        $columns = Schema::getColumnListing('baloncestos');
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
	 * Stores Baloncesto into database
	 *
	 * @param array $input
	 *
	 * @return Baloncesto
	 */
	public function store($input)
	{
		return Baloncesto::create($input);
	}

	/**
	 * Find Baloncesto by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Baloncesto
	 */
	public function findBaloncestoById($id)
	{
		return Baloncesto::find($id);
	}

	/**
	 * Updates Baloncesto into database
	 *
	 * @param Baloncesto $baloncesto
	 * @param array $input
	 *
	 * @return Baloncesto
	 */
	public function update($baloncesto, $input)
	{
		$baloncesto->fill($input);
		$baloncesto->save();

		return $baloncesto;
	}
}