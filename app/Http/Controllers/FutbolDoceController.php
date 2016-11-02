<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateFutbolDoceRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\FutbolDoceRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class FutbolDoceController extends AppBaseController
{

	/** @var  FutbolDoceRepository */
	private $futbolDoceRepository;

	function __construct(FutbolDoceRepository $futbolDoceRepo)
	{
		$this->futbolDoceRepository = $futbolDoceRepo;
	    $this->middleware('admin',['only' => ['edit','store','update']]);
	}

	/**
	 * Display a listing of the FutbolDoce.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->futbolDoceRepository->search($input);

		$futbolDoces = $result[0];

		$attributes = $result[1];

		return view('futbolDoces.index')
		    ->with('futbolDoces', $futbolDoces)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new FutbolDoce.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('futbolDoces.create');
	}

	/**
	 * Store a newly created FutbolDoce in storage.
	 *
	 * @param CreateFutbolDoceRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateFutbolDoceRequest $request)
	{
        $input = $request->all();

		$futbolDoce = $this->futbolDoceRepository->store($input);

		Flash::message('FutbolDoce saved successfully.');

		return redirect(route('futbolDoces.index'));
	}

	/**
	 * Display the specified FutbolDoce.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$futbolDoce = $this->futbolDoceRepository->findFutbolDoceById($id);

		if(empty($futbolDoce))
		{
			Flash::error('FutbolDoce not found');
			return redirect(route('futbolDoces.index'));
		}

		return view('futbolDoces.show')->with('futbolDoce', $futbolDoce);
	}

	/**
	 * Show the form for editing the specified FutbolDoce.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$futbolDoce = $this->futbolDoceRepository->findFutbolDoceById($id);

		if(empty($futbolDoce))
		{
			Flash::error('FutbolDoce not found');
			return redirect(route('futbolDoces.index'));
		}

		return view('futbolDoces.edit')->with('futbolDoce', $futbolDoce);
	}

	/**
	 * Update the specified FutbolDoce in storage.
	 *
	 * @param  int    $id
	 * @param CreateFutbolDoceRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateFutbolDoceRequest $request)
	{
		$futbolDoce = $this->futbolDoceRepository->findFutbolDoceById($id);

		if(empty($futbolDoce))
		{
			Flash::error('FutbolDoce not found');
			return redirect(route('futbolDoces.index'));
		}

		$futbolDoce = $this->futbolDoceRepository->update($futbolDoce, $request->all());

		Flash::message('FutbolDoce updated successfully.');

		return redirect(route('futbolDoces.index'));
	}

	/**
	 * Remove the specified FutbolDoce from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$futbolDoce = $this->futbolDoceRepository->findFutbolDoceById($id);

		if(empty($futbolDoce))
		{
			Flash::error('FutbolDoce not found');
			return redirect(route('futbolDoces.index'));
		}

		$futbolDoce->delete();

		Flash::message('FutbolDoce deleted successfully.');

		return redirect(route('futbolDoces.index'));
	}

}
