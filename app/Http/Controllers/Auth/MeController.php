<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeController extends Controller
{

    public function __construct(){
        $this->middleware(['auth:api']);
    }

    public function me(Request $request){
        // dd($request->user());
        $user = $request->user();

        return response()->json([
            'email'=>$user->email,
            'name'=>$user->name,
        ]);
    }
}
