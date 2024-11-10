<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserData\StoreRequest;
use App\Models\UserData;

class UserController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        return UserData::create($data);
    }
}
