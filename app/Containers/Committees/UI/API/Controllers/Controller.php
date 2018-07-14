<?php

namespace App\Containers\Committees\UI\API\Controllers;

use App\Containers\Committees\UI\API\Requests\CreateCommitteesRequest;
use App\Containers\Committees\UI\API\Requests\DeleteCommitteesRequest;
use App\Containers\Committees\UI\API\Requests\GetAllCommitteesRequest;
use App\Containers\Committees\UI\API\Requests\FindCommitteesByIdRequest;
use App\Containers\Committees\UI\API\Requests\UpdateCommitteesRequest;
use App\Containers\Committees\UI\API\Transformers\CommitteesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Committees\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCommitteesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCommittees(CreateCommitteesRequest $request)
    {
        $committees = Apiato::call('Committees@CreateCommitteesAction', [$request]);

        return $this->created($this->transform($committees, CommitteesTransformer::class));
    }

    /**
     * @param FindCommitteesByIdRequest $request
     * @return array
     */
    public function findCommitteesById(FindCommitteesByIdRequest $request)
    {
        $committees = Apiato::call('Committees@FindCommitteesByIdAction', [$request]);

        return $this->transform($committees, CommitteesTransformer::class);
    }

    /**
     * @param GetAllCommitteesRequest $request
     * @return array
     */
    public function getAllCommittees(GetAllCommitteesRequest $request)
    {
        $committees = Apiato::call('Committees@GetAllCommitteesAction', [$request]);

        return $this->transform($committees, CommitteesTransformer::class);
    }

    /**
     * @param UpdateCommitteesRequest $request
     * @return array
     */
    public function updateCommittees(UpdateCommitteesRequest $request)
    {
        $committees = Apiato::call('Committees@UpdateCommitteesAction', [$request]);

        return $this->transform($committees, CommitteesTransformer::class);
    }

    /**
     * @param DeleteCommitteesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCommittees(DeleteCommitteesRequest $request)
    {
        Apiato::call('Committees@DeleteCommitteesAction', [$request]);

        return $this->noContent();
    }
}
