<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateVoleibolRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\VoleibolRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class VoleibolController extends AppBaseController
{

	/** @var  VoleibolRepository */
	private $voleibolRepository;

	function __construct(VoleibolRepository $voleibolRepo)
	{
		$this->voleibolRepository = $voleibolRepo;
		$this->middleware('admin',['only' => ['edit','store','update']]);
	}

	/**
	 * Display a listing of the Voleibol.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->voleibolRepository->search($input);

		$voleibols = $result[0];

		$attributes = $result[1];

		return view('voleibols.index')
		    ->with('voleibols', $voleibols)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Voleibol.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('voleibols.create');
	}

	/**
	 * Store a newly created Voleibol in storage.
	 *
	 * @param CreateVoleibolRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateVoleibolRequest $request)
	{
        $input = $request->all();

		$voleibol = $this->voleibolRepository->store($input);

		Flash::message('Voleibol saved successfully.');

		return redirect(route('voleibols.index'));
	}

	/**
	 * Display the specified Voleibol.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$voleibol = $this->voleibolRepository->findVoleibolById($id);

		if(empty($voleibol))
		{
			Flash::error('Voleibol not found');
			return redirect(route('voleibols.index'));
		}

		return view('voleibols.show')->with('voleibol', $voleibol);
	}

	/**
	 * Show the form for editing the specified Voleibol.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$voleibol = $this->voleibolRepository->findVoleibolById($id);

		if(empty($voleibol))
		{
			Flash::error('Voleibol not found');
			return redirect(route('voleibols.index'));
		}

		return view('voleibols.edit')->with('voleibol', $voleibol);
	}

	/**
	 * Update the specified Voleibol in storage.
	 *
	 * @param  int    $id
	 * @param CreateVoleibolRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateVoleibolRequest $request)
	{
		$voleibol = $this->voleibolRepository->findVoleibolById($id);

		if(empty($voleibol))
		{
			Flash::error('Voleibol not found');
			return redirect(route('voleibols.index'));
		}

		$voleibol = $this->voleibolRepository->update($voleibol, $request->all());

		Flash::message('Voleibol updated successfully.');

		return redirect(route('voleibols.index'));
	}

	/**
	 * Remove the specified Voleibol from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$voleibol = $this->voleibolRepository->findVoleibolById($id);

		if(empty($voleibol))
		{
			Flash::error('Voleibol not found');
			return redirect(route('voleibols.index'));
		}

		$voleibol->delete();

		Flash::message('Voleibol deleted successfully.');

		return redirect(route('voleibols.index'));
	}

}
