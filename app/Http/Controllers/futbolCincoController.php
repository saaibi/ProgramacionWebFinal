<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatefutbolCincoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\futbolCincoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class futbolCincoController extends AppBaseController
{

	/** @var  futbolCincoRepository */
	private $futbolCincoRepository;

	function __construct(futbolCincoRepository $futbolCincoRepo)
	{
		$this->futbolCincoRepository = $futbolCincoRepo;
	}

	/**
	 * Display a listing of the futbolCinco.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->futbolCincoRepository->search($input);

		$futbolCincos = $result[0];

		$attributes = $result[1];

		return view('futbolCincos.index')
		    ->with('futbolCincos', $futbolCincos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new futbolCinco.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('futbolCincos.create');
	}

	/**
	 * Store a newly created futbolCinco in storage.
	 *
	 * @param CreatefutbolCincoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatefutbolCincoRequest $request)
	{
        $input = $request->all();

		$futbolCinco = $this->futbolCincoRepository->store($input);

		Flash::message('futbolCinco saved successfully.');

		return redirect(route('futbolCincos.index'));
	}

	/**
	 * Display the specified futbolCinco.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$futbolCinco = $this->futbolCincoRepository->findfutbolCincoById($id);

		if(empty($futbolCinco))
		{
			Flash::error('futbolCinco not found');
			return redirect(route('futbolCincos.index'));
		}

		return view('futbolCincos.show')->with('futbolCinco', $futbolCinco);
	}

	/**
	 * Show the form for editing the specified futbolCinco.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$futbolCinco = $this->futbolCincoRepository->findfutbolCincoById($id);

		if(empty($futbolCinco))
		{
			Flash::error('futbolCinco not found');
			return redirect(route('futbolCincos.index'));
		}

		return view('futbolCincos.edit')->with('futbolCinco', $futbolCinco);
	}

	/**
	 * Update the specified futbolCinco in storage.
	 *
	 * @param  int    $id
	 * @param CreatefutbolCincoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatefutbolCincoRequest $request)
	{
		$futbolCinco = $this->futbolCincoRepository->findfutbolCincoById($id);

		if(empty($futbolCinco))
		{
			Flash::error('futbolCinco not found');
			return redirect(route('futbolCincos.index'));
		}

		$futbolCinco = $this->futbolCincoRepository->update($futbolCinco, $request->all());

		Flash::message('futbolCinco updated successfully.');

		return redirect(route('futbolCincos.index'));
	}

	/**
	 * Remove the specified futbolCinco from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$futbolCinco = $this->futbolCincoRepository->findfutbolCincoById($id);

		if(empty($futbolCinco))
		{
			Flash::error('futbolCinco not found');
			return redirect(route('futbolCincos.index'));
		}

		$futbolCinco->delete();

		Flash::message('futbolCinco deleted successfully.');

		return redirect(route('futbolCincos.index'));
	}

}
