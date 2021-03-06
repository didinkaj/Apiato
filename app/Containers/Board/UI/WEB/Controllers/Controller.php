<?php

namespace App\Containers\Board\UI\WEB\Controllers;

use App\Containers\Board\UI\WEB\Requests\CreateBoardRequest;
use App\Containers\Board\UI\WEB\Requests\DeleteBoardRequest;
use App\Containers\Board\UI\WEB\Requests\GetAllBoardsRequest;
use App\Containers\Board\UI\WEB\Requests\FindBoardByIdRequest;
use App\Containers\Board\UI\WEB\Requests\UpdateBoardRequest;
use App\Containers\Board\UI\WEB\Requests\StoreBoardRequest;
use App\Containers\Board\UI\WEB\Requests\EditBoardRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Board\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBoardsRequest $request
     */
    public function index(GetAllBoardsRequest $request)
    {
        $boards = Apiato::call('Board@GetAllBoardsAction', [$request]);
        return view('board::get-all-boards',['boards'=>$boards]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBoardByIdRequest $request
     */
    public function show(FindBoardByIdRequest $request)
    {
        $board = Apiato::call('Board@FindBoardByIdAction', [$request]);
        return view('board::show-board',['board' => $board]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardRequest $request
     */
    public function create(CreateBoardRequest $request)
    {
        // ..
        return view('board::create-board');

    }

    /**
     * Add a new entity
     *
     * @param StoreBoardRequest $request
     */
    public function store(StoreBoardRequest $request)
    {
       $board = Apiato::call('Board@CreateBoardAction', [$request]);
        return redirect()->route('web_board_index');
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardRequest $request
     */
    public function edit(EditBoardRequest $request)
    {
        $board = Apiato::call('Board@FindBoardByIdAction', [$request]);
        return view('board::edit-board',['board' => $board]);


        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardRequest $request
     */
    public function update(UpdateBoardRequest $request)
    {
        $board = Apiato::call('Board@UpdateBoardAction', [$request]);
        return view('board::show-board',['board' => $board]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardRequest $request
     */
    public function delete(DeleteBoardRequest $request)
    {
         $result = Apiato::call('Board@DeleteBoardAction', [$request]);
        return redirect()->route('web_board_index');

         // ..
    }
}
