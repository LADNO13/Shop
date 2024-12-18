<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\User\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate([
            'email' => $data['email']
        ], $data);

        return redirect()->route('user.index');
    }
}
