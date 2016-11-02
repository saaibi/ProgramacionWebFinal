<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBaloncestoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\BaloncestoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class BaloncestoController extends AppBaseController
{

	/** @var  BaloncestoRepository */
	private $baloncestoRepository;

	function __construct(BaloncestoRepository $baloncestoRepo)
	{
		$this->baloncestoRepository = $baloncestoRepo;
		$this->middleware('admin',['only' => ['edit','store','update']]);
	}

	/**
	 * Display a listing of the Baloncesto.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->baloncestoRepository->search($input);

		$baloncestos = $result[0];

		$attributes = $result[1];

		return view('baloncestos.index')
		    ->with('baloncestos', $baloncestos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Baloncesto.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('baloncestos.create');
	}

	/**
	 * Store a newly created Baloncesto in storage.
	 *
	 * @param CreateBaloncestoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateBaloncestoRequest $request)
	{
        $input = $request->all();

		$baloncesto = $this->baloncestoRepository->store($input);

		Flash::message('Baloncesto saved successfully.');

		return redirect(route('baloncestos.index'));
	}

	/**
	 * Display the specified Baloncesto.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$baloncesto = $this->baloncestoRepository->findBaloncestoById($id);

		if(empty($baloncesto))
		{
			Flash::error('Baloncesto not found');
			return redirect(route('baloncestos.index'));
		}

		return view('baloncestos.show')->with('baloncesto', $baloncesto);
	}

	/**
	 * Show the form for editing the specified Baloncesto.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$baloncesto = $this->baloncestoRepository->findBaloncestoById($id);

		if(empty($baloncesto))
		{
			Flash::error('Baloncesto not found');
			return redirect(route('baloncestos.index'));
		}

		return view('baloncestos.edit')->with('baloncesto', $baloncesto);
	}

	/**
	 * Update the specified Baloncesto in storage.
	 *
	 * @param  int    $id
	 * @param CreateBaloncestoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateBaloncestoRequest $request)
	{
		$baloncesto = $this->baloncestoRepository->findBaloncestoById($id);

		if(empty($baloncesto))
		{
			Flash::error('Baloncesto not found');
			return redirect(route('baloncestos.index'));
		}

		$baloncesto = $this->baloncestoRepository->update($baloncesto, $request->all());

		Flash::message('Baloncesto updated successfully.');

		return redirect(route('baloncestos.index'));
	}

	/**
	 * Remove the specified Baloncesto from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$baloncesto = $this->baloncestoRepository->findBaloncestoById($id);

		if(empty($baloncesto))
		{
			Flash::error('Baloncesto not found');
			return redirect(route('baloncestos.index'));
		}

		$baloncesto->delete();

		Flash::message('Baloncesto deleted successfully.');

		return redirect(route('baloncestos.index'));
	}

}
