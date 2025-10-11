<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class apiController extends Controller
{
   
   public function userStore(Request $request)
    {
        
        $b = User::all();
        $data = json_decode($b, true);
        return response()->json($data);
    }
}
