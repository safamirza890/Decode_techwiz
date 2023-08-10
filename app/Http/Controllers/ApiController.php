<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function userInfo(Request $request)
{
    return $request->user();
}

public function createToken(Request $request)
{
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
}
}
