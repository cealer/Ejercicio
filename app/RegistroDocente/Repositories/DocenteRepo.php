<?php

namespace RegistroDocente\Repositories;

use RegistroDocente\Entities\Docente;

class DocenteRepo extends BaseRepo {

    public function getModel()
    {
        return new Docente;
    }

    public function newDocente()
    {
        $docente = new Docente();
        return $docente;
    }


    public function lista()
    {
        return Docente::get()->take(10);
    }

    public function findLatest($take = 10)
    {
        return Docente::orderBy('created_at', 'DESC')->take($take)->get();
    }
} 