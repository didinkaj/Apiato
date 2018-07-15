<?php

namespace App\Containers\Boardmembers\UI\API\Transformers;

use App\Containers\Boardmembers\Models\Boardmembers;
use App\Ship\Parents\Transformers\Transformer;

class BoardmembersTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Boardmembers $entity
     *
     * @return array
     */
    public function transform(Boardmembers $entity)
    {
        $response = [
            'object' => 'Boardmembers',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
