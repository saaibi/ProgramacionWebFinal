<?php

namespace App\Libraries\Repositories;


use App\Models\Bicicross;
use Illuminate\Support\Facades\Schema;

class BicicrossRepository
{

	/**
	 * Returns all Bicicrosses
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Bicicross::all();
	}

	public function search($input)
    {
        $query = Bicicross::query();

        $columns = Schema::getColumnListing('bicicrosses');
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
	 * Stores Bicicross into database
	 *
	 * @param array $input
	 *
	 * @return Bicicross
	 */
	public function store($input)
	{
		return Bicicross::create($input);
	}

	/**
	 * Find Bicicross by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Bicicross
	 */
	public function findBicicrossById($id)
	{
		return Bicicross::find($id);
	}

	/**
	 * Updates Bicicross into database
	 *
	 * @param Bicicross $bicicross
	 * @param array $input
	 *
	 * @return Bicicross
	 */
	public function update($bicicross, $input)
	{
		$bicicross->fill($input);
		$bicicross->save();

		return $bicicross;
	}
}