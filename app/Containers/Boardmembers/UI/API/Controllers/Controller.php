<?php

namespace App\Containers\Boardmembers\UI\API\Controllers;

use App\Containers\Boardmembers\UI\API\Requests\CreateBoardmembersRequest;
use App\Containers\Boardmembers\UI\API\Requests\DeleteBoardmembersRequest;
use App\Containers\Boardmembers\UI\API\Requests\GetAllBoardmembersRequest;
use App\Containers\Boardmembers\UI\API\Requests\FindBoardmembersByIdRequest;
use App\Containers\Boardmembers\UI\API\Requests\UpdateBoardmembersRequest;
use App\Containers\Boardmembers\UI\API\Transformers\BoardmembersTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Boardmembers\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateBoardmembersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createBoardmembers(CreateBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@CreateBoardmembersAction', [$request]);

        return $this->created($this->transform($boardmembers, BoardmembersTransformer::class));
    }

    /**
     * @param FindBoardmembersByIdRequest $request
     * @return array
     */
    public function findBoardmembersById(FindBoardmembersByIdRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@FindBoardmembersByIdAction', [$request]);

        return $this->transform($boardmembers, BoardmembersTransformer::class);
    }

    /**
     * @param GetAllBoardmembersRequest $request
     * @return array
     */
    public function getAllBoardmembers(GetAllBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@GetAllBoardmembersAction', [$request]);

        return $this->transform($boardmembers, BoardmembersTransformer::class);
    }

    /**
     * @param UpdateBoardmembersRequest $request
     * @return array
     */
    public function updateBoardmembers(UpdateBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@UpdateBoardmembersAction', [$request]);

        return $this->transform($boardmembers, BoardmembersTransformer::class);
    }

    /**
     * @param DeleteBoardmembersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteBoardmembers(DeleteBoardmembersRequest $request)
    {
        Apiato::call('Boardmembers@DeleteBoardmembersAction', [$request]);

        return $this->noContent();
    }
}
