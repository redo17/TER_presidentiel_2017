<?php

namespace App\Repositories;

use App\Candidat;

class CandidatRepository extends ResourceRepository
{
    public function __construct(Candidat $candidat)
    {
        $this->model = $candidat;
    }
}