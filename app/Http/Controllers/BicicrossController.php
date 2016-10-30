<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBicicrossRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\BicicrossRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class BicicrossController extends AppBaseController
{

	/** @var  BicicrossRepository */
	private $bicicrossRepository;

	function __construct(BicicrossRepository $bicicrossRepo)
	{
		$this->bicicrossRepository = $bicicrossRepo;
	}

	/**
	 * Display a listing of the Bicicross.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->bicicrossRepository->search($input);

		$bicicrosses = $result[0];

		$attributes = $result[1];

		return view('bicicrosses.index')
		    ->with('bicicrosses', $bicicrosses)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Bicicross.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('bicicrosses.create');
	}

	/**
	 * Store a newly created Bicicross in storage.
	 *
	 * @param CreateBicicrossRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateBicicrossRequest $request)
	{
        $input = $request->all();

		$bicicross = $this->bicicrossRepository->store($input);

		Flash::message('Bicicross saved successfully.');

		return redirect(route('bicicrosses.index'));
	}

	/**
	 * Display the specified Bicicross.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$bicicross = $this->bicicrossRepository->findBicicrossById($id);

		if(empty($bicicross))
		{
			Flash::error('Bicicross not found');
			return redirect(route('bicicrosses.index'));
		}

		return view('bicicrosses.show')->with('bicicross', $bicicross);
	}

	/**
	 * Show the form for editing the specified Bicicross.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bicicross = $this->bicicrossRepository->findBicicrossById($id);

		if(empty($bicicross))
		{
			Flash::error('Bicicross not found');
			return redirect(route('bicicrosses.index'));
		}

		return view('bicicrosses.edit')->with('bicicross', $bicicross);
	}

	/**
	 * Update the specified Bicicross in storage.
	 *
	 * @param  int    $id
	 * @param CreateBicicrossRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateBicicrossRequest $request)
	{
		$bicicross = $this->bicicrossRepository->findBicicrossById($id);

		if(empty($bicicross))
		{
			Flash::error('Bicicross not found');
			return redirect(route('bicicrosses.index'));
		}

		$bicicross = $this->bicicrossRepository->update($bicicross, $request->all());

		Flash::message('Bicicross updated successfully.');

		return redirect(route('bicicrosses.index'));
	}

	/**
	 * Remove the specified Bicicross from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$bicicross = $this->bicicrossRepository->findBicicrossById($id);

		if(empty($bicicross))
		{
			Flash::error('Bicicross not found');
			return redirect(route('bicicrosses.index'));
		}

		$bicicross->delete();

		Flash::message('Bicicross deleted successfully.');

		return redirect(route('bicicrosses.index'));
	}

}
