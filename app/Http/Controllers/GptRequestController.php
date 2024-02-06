<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestSender;

class GptRequestController extends Controller
{
    public function sendRequest(Request $request): View
    {

        $validateData = $request->validate([
            'message' => 'required',
        ]);
        

        
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
    }
}
