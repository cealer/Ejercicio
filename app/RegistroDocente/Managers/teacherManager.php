<?php 

namespace RegistroDocente\Managers;

class teacherManager extends BaseManager
{
	function getRules()
	{
		$rules=[
				'full_name'=>'required',
				'Amount'=>'required|min:0',
				'StartMonth'=>'required|min:0',
				'Number'=>'required|min:0',
				];
		return $rules;
	}
/*
	    public function prepareData($data)
    {
         $data['EndMonth'] = 1;
        return $data;
    }
*/
}
