<?php

namespace App\Libraries\Repositories;


use App\Models\Voleibol;
use Illuminate\Support\Facades\Schema;

class VoleibolRepository
{

	/**
	 * Returns all Voleibols
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Voleibol::all();
	}

	public function search($input)
    {
        $query = Voleibol::query();

        $columns = Schema::getColumnListing('voleibols');
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
	 * Stores Voleibol into database
	 *
	 * @param array $input
	 *
	 * @return Voleibol
	 */
	public function store($input)
	{
		return Voleibol::create($input);
	}

	/**
	 * Find Voleibol by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Voleibol
	 */
	public function findVoleibolById($id)
	{
		return Voleibol::find($id);
	}

	/**
	 * Updates Voleibol into database
	 *
	 * @param Voleibol $voleibol
	 * @param array $input
	 *
	 * @return Voleibol
	 */
	public function update($voleibol, $input)
	{
		$voleibol->fill($input);
		$voleibol->save();

		return $voleibol;
	}
}