<?php

namespace App\Containers\Committees\UI\API\Transformers;

use App\Containers\Committees\Models\Committees;
use App\Ship\Parents\Transformers\Transformer;

class CommitteesTransformer extends Transformer
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
     * @param Committees $entity
     *
     * @return array
     */
    public function transform(Committees $entity)
    {
        $response = [
            'object' => 'Committees',
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
