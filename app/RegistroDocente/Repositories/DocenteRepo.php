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

} 