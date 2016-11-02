<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateReservasRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ReservasRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use App\User;

use App\Models\Reservas;


class ReservasController extends AppBaseController
{

	/** @var  ReservasRepository */
	private $reservasRepository;

	function __construct(ReservasRepository $reservasRepo)
	{
		$this->reservasRepository = $reservasRepo;
		$this->middleware('admin',['only' => ['edit','update']]);
	}

	/**
	 * Display a listing of the Reservas.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */

	 
	public function index(Request $request)
	{
		/*
		$user = User::find(1);
	       $friends_votes = $user->reservas()
	    ->with('user') // bring along details of the friend
	    ->join('users', 'users.id', '=', 'reservas.id_usuario')
	    ->get(); // exclude extra details from friends table
    
         dd($friends_votes);
         
         	$reser = Reservas::where('id_usuario' , '=' , 1)
			->with('user')
			->get();
		
		dd($reser->toArray());
		
		$article = \App\Models\Reservas::with('futbolCinco')->get();
         
         
         dd($article->toArray());
         
         */
         
        // $use = Reservas::join('users', 'reservas.id_usuario', '=', 'users.id')->get();

	     
	
		
	    $input = $request->all();

		$result = $this->reservasRepository->search($input);

		$reservas = $result[0];

		$attributes = $result[1];

			return view('reservas.index',['reservas'=>$reservas]);
	}

	/**
	 * Show the form for creating a new Reservas.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return view('reservas.create');
	}

	/**
	 * Funcion para optener escenarios 
	 * 
	 * @Get
	 * 
	 */
	 
   public function getEscenarios(Request $request , $id)
	{
		if($request->ajax()){
			if ($id == 'FutbolCinco'){
				 $escenarios = Reservas::getFutbolCinco();
			} else if ($id == 'FutbolDoce'){
				 $escenarios = Reservas::getFutbolDoce();
			} else if ($id == 'Baloncesto'){
				 $escenarios = Reservas::getBaloncesto();
			} else if ($id == 'Voleibol'){
				 $escenarios = Reservas::getVoleibol();
			}else if ($id == 'Bicicross'){
				 $escenarios = Reservas::getBicicross();
			}
           //return Response::json(array('escenarios' => $escenarios));
           return Response::json($escenarios);
        }
	}
	
	/**
	 * 
	 * Funcion para optener escenarios  reservados 
	 * 
	 * @Get
	 * 
	 */
	
	 public function getReservasEcenarios(Request $request , $idEs, $tipo, $idFecha)
	 {
	 	if($request->ajax()){
	 		$reservas = Reservas::getReservas($idEs,$tipo,$idFecha);
	     	return Response::json($reservas);
	 	}
	 }
	 
	/**
	 * Store a newly created Reservas in storage.
	 *
	 * @param CreateReservasRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateReservasRequest $request)
	{
        $input = $request->all();

		$reservas = $this->reservasRepository->store($input);

		Flash::message('Reservas saved successfully.');

		return redirect(route('reservas.index'));
	}

	/**
	 * Display the specified Reservas.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$reservas = $this->reservasRepository->findReservasById($id);

		if(empty($reservas))
		{
			Flash::error('Reservas not found');
			return redirect(route('reservas.index'));
		}

		return view('reservas.show')->with('reservas', $reservas);
	}

	/**
	 * Show the form for editing the specified Reservas.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$reservas = $this->reservasRepository->findReservasById($id);

		if(empty($reservas))
		{
			Flash::error('Reservas not found');
			return redirect(route('reservas.index'));
		}

		return view('reservas.edit')->with('reservas', $reservas);
	}

	/**
	 * Update the specified Reservas in storage.
	 *
	 * @param  int    $id
	 * @param CreateReservasRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateReservasRequest $request)
	{
		$reservas = $this->reservasRepository->findReservasById($id);

		if(empty($reservas))
		{
			Flash::error('Reservas not found');
			return redirect(route('reservas.index'));
		}

		$reservas = $this->reservasRepository->update($reservas, $request->all());

		Flash::message('Reservas updated successfully.');

		return redirect(route('reservas.index'));
	}

	/**
	 * Remove the specified Reservas from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$reservas = $this->reservasRepository->findReservasById($id);

		if(empty($reservas))
		{
			Flash::error('Reservas not found');
			return redirect(route('reservas.index'));
		}

		$reservas->delete();

		Flash::message('Reservas deleted successfully.');

		return redirect(route('reservas.index'));
	}

}
