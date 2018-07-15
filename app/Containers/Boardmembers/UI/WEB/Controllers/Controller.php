<?php

namespace App\Containers\Boardmembers\UI\WEB\Controllers;

use App\Containers\Boardmembers\UI\WEB\Requests\CreateBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\DeleteBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\GetAllBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\FindBoardmembersByIdRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\UpdateBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\StoreBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\EditBoardmembersRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Boardmembers\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBoardmembersRequest $request
     */
    public function index(GetAllBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@GetAllBoardmembersAction', [$request]);
        return view('boardmembers::get-all-boards-members',['boardmembers'=>$boardmembers]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBoardmembersByIdRequest $request
     */
    public function show(FindBoardmembersByIdRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@FindBoardmembersByIdAction', [$request]);
        return view('boardmembers::show-board-member',['boardmember'=>$boardmembers]);
        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardmembersRequest $request
     */
    public function create(CreateBoardmembersRequest $request)
    {
        // ..
        return view('boardmembers::create-board-member');
    }

    /**
     * Add a new entity
     *
     * @param StoreBoardmembersRequest $request
     */
    public function store(StoreBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@CreateBoardmembersAction', [$request]);
        return redirect()->route('web_boardmembers_index');

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardmembersRequest $request
     */
    public function edit(EditBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@FindBoardmembersByIdAction', [$request]);
        return view('boardmembers::edit-board-member',['boardmember'=>$boardmembers]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardmembersRequest $request
     */
    public function update(UpdateBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@UpdateBoardmembersAction', [$request]);
        return view('boardmembers::show-board-member',['boardmember'=>$boardmembers]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardmembersRequest $request
     */
    public function delete(DeleteBoardmembersRequest $request)
    {
         $result = Apiato::call('Boardmembers@DeleteBoardmembersAction', [$request]);
        return redirect()->route('web_boardmembers_index');

         // ..
    }
}
