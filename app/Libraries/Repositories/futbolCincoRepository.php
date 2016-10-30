<?php

namespace App\Libraries\Repositories;


use App\Models\futbolCinco;
use Illuminate\Support\Facades\Schema;

class futbolCincoRepository
{

	/**
	 * Returns all futbolCincos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return futbolCinco::all();
	}

	public function search($input)
    {
        $query = futbolCinco::query();

        $columns = Schema::getColumnListing('futbol_cincos');
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
	 * Stores futbolCinco into database
	 *
	 * @param array $input
	 *
	 * @return futbolCinco
	 */
	public function store($input)
	{
		return futbolCinco::create($input);
	}

	/**
	 * Find futbolCinco by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|futbolCinco
	 */
	public function findfutbolCincoById($id)
	{
		return futbolCinco::find($id);
	}

	/**
	 * Updates futbolCinco into database
	 *
	 * @param futbolCinco $futbolCinco
	 * @param array $input
	 *
	 * @return futbolCinco
	 */
	public function update($futbolCinco, $input)
	{
		$futbolCinco->fill($input);
		$futbolCinco->save();

		return $futbolCinco;
	}
}