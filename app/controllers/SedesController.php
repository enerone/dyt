<?php

use Dyt\Forms\SedeForm;
use Dyt\Sedes\RegisterSedeCommand;
use Dyt\Sedes\Sede;

/**
 * @property mixed sedeRepository
 */
class SedesController extends \BaseController {


    private $sedeForm;

    function __construct(SedeForm $sedeForm) {

        $this->sedeForm = $sedeForm;


    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $sedes =  Sede::orderBy('nombre_sede','asc')->paginate(25);

        return View::make('sedes.index')->withSedes($sedes);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('sedes.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->sedeForm->validate(Input::all());


        $sede = $this->execute(RegisterSedeCommand::class);
        /*


                Flash::message('Glad to have you as a larabook member');

                return Redirect::home(); */
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
