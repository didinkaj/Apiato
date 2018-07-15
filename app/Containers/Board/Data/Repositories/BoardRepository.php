<?php

namespace App\Containers\Board\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use App\Containers\Board\Models\Board;

/**
 * Class BoardRepository
 */
class BoardRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function createMember($data)
    {

        return parent::create($data);
    }
}

