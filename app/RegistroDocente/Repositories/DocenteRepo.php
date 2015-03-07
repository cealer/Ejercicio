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
/*
    public function findLatest($take = 10)
    {
        return Category::with([
            'candidates' => function ($q) use ($take) {
                    $q->take($take);
                    $q->orderBy('created_at', 'DESC');
                },
            'candidates.user'
        ])->get();
    }
*/
} 