<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Group $Group)
    {
        $Group->delete();

        return redirect()->route('group.index');
    }
}
