<?php

namespace App\Libraries\Repositories;


use App\Models\FutbolDoce;
use Illuminate\Support\Facades\Schema;

class FutbolDoceRepository
{

	/**
	 * Returns all FutbolDoces
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return FutbolDoce::all();
	}

	public function search($input)
    {
        $query = FutbolDoce::query();

        $columns = Schema::getColumnListing('futbol_doces');
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
	 * Stores FutbolDoce into database
	 *
	 * @param array $input
	 *
	 * @return FutbolDoce
	 */
	public function store($input)
	{
		return FutbolDoce::create($input);
	}

	/**
	 * Find FutbolDoce by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|FutbolDoce
	 */
	public function findFutbolDoceById($id)
	{
		return FutbolDoce::find($id);
	}

	/**
	 * Updates FutbolDoce into database
	 *
	 * @param FutbolDoce $futbolDoce
	 * @param array $input
	 *
	 * @return FutbolDoce
	 */
	public function update($futbolDoce, $input)
	{
		$futbolDoce->fill($input);
		$futbolDoce->save();

		return $futbolDoce;
	}
}