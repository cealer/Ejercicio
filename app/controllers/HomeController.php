<?php
use RegistroDocente\Repositories\DocenteRepo;
use RegistroDocente\Script\calcular;
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $docenteRepo;

    public function __construct(DocenteRepo $docenteRepo)
    {
        $this->docenteRepo = $docenteRepo;
    }

	public function index()
	{	
		$latest_docentes = $this->docenteRepo->findLatest();
		$cuotas=new calcular();	
		return View::make('home',compact('latest_docentes','cuotas'));
	}

}
