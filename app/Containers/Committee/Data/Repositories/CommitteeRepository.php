<?php

namespace App\Containers\Committee\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CommitteeRepository
 */
class CommitteeRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
