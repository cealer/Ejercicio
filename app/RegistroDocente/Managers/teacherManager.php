<?php 

namespace RegistroDocente\Managers;

class teacherManager extends BaseManager
{
	function getRules()
	{
		$rules=[
				'FirstName'=>'required',
				'LastName'=>'required',
				'Amount'=>'required|min:0',
				'StartMonth'=>'required',
				'EndMonth'=>'required',
				'Number'=>'required|min:0',
				'Quotas'=>'required|min:0'
				];
		return $rules;
	}
}
