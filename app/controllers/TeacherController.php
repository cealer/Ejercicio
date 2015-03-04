<?php

use RegistroDocente\Repositories\DocenteRepo;
use RegistroDocente\Managers\teacherManager;
class TeacherController extends BaseController {

	protected $docenteRepo;

	public function __construct(DocenteRepo $docenteRepo){
		$this->docenteRepo=$docenteRepo;
	}

	public function listTeacher(){
	return View::make('listTeacher');
	}

	public function TeacherId($id){
		return View::make('TeacherId');
	}

	public function SignUp(){
		return View::make('createTeacher');
	}
/*
	public function RegisterTeacher(){
		$teacher=$this->docenteRepo->newDocente();
		$manager=new teacherManager($teacher,Input::all());
		$manager->save();
		return Redirect::route('home');
	}
*/
}