<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract {

    public function toResponse($request) {
        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect('/');  // lisa see kood eesoleva asemel kui tahad minna peale registreerimist
    }
}