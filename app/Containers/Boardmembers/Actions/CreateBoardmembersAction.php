<?php

namespace App\Containers\Boardmembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateBoardmembersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'fname', 'sname','lname','email', 'phone_no', 'department'
        ]);

        $boardmembers = Apiato::call('Boardmembers@CreateBoardmembersTask', [$data]);

        return $boardmembers;
    }
}
