<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserData\StoreRequest;
use App\Models\UserData;

class UserController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            UserData::create($data);

            return response()->json(['message' => 'Успешно'], 201);
        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Ошибка на сервере',
                'errors' => $e->getMessage(),
                'old' => $request->all(),
            ], 400);
        }
    }
}
