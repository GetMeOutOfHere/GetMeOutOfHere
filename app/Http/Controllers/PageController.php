<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SMSQueue;

class PageController extends Controller
{

    public function dashboard(Request $request){
        if($request->user()){

        }
    }

    public function scheduleSms(Request $request){

        if($request->isMethod('get')){

        }

        if($request->isMethod('post')){

        }

    }
}
