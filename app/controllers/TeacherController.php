<?php

use RegistroDocente\Repositories\DocenteRepo;
use RegistroDocente\Managers\teacherManager;
use RegistroDocente\Script\calcular;
class TeacherController extends BaseController {

	protected $docenteRepo;

	public function __construct(DocenteRepo $docenteRepo){
		$this->docenteRepo=$docenteRepo;
	}

	public function listTeacher(){
	return View::make('listTeacher');
	}

	public function TeacherId($id){
		$teacher = $this->docenteRepo->find($id);
		$cuotas=new calcular();
		$cal=$cuotas->Cuotas($teacher->Amount,$teacher->Number);
		$mes=$cuotas->Mes($teacher->StartMonth,$teacher->Number);
		//$this->notFoundUnless($category);
		return View::make('TeacherId',compact('teacher','cuotas','cal','mes'));
	}

	public function SignUp(){
		$month  = \Lang::get('utils.month');
		return View::make('createTeacher',compact('month'));
	}

	public function RegisterTeacher(){
		$cuotas=new calcular();
		$teacher=$this->docenteRepo->newDocente();
		$manager=new teacherManager($teacher,Input::all());
		$manager->save();
		return Redirect::route('home');
	}
}