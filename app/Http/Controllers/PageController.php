<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SMSQueue;
use Auth;
use Session;
use Carbon\Carbon;

class PageController extends Controller
{

    public function dashboard(Request $request){
        if(Auth::user()){
            return view('layouts/sms_queue');
        }else{
            return redirect('/login');
        }
    }

    public function scheduleSms(Request $request){
        if(Auth::user()){
            if($request->isMethod('post')){
                $send_time = $request->input('send_time');
                $fake_sender_name = $request->input('fake_sender_name');
                $fake_sender_number = $request->input('fake_sender_number');
                $send_to = $request->input('send_to');
                $message = $request->input('message');
                $send_time = $request->input('send_time');
                list($y, $m, $d, $h, $m, $s) = explode("/", $send_time);
                $sms = SMSQueue::create([
                    'fake_sender_name' => $fake_sender_name,
                    'fake_sender_number' => $fake_sender_number,
                    'send_to' => $send_to,
                    'message' => $message,
                    'send_time' => Carbon::create($y, $m, $d, $h, $m, $s, "Asia/Phnom_Penh")
                ]);

                if($sms){
                    Session::flash('success', 'Successfully scheduled excuse SMS.');
                    return redirect('/dashboard');
                }else{
                    Session::flash('error', 'Oop! something went wrong while trying to schedule SMS.');
                    return redirect('/dashboard');
                }
            }
        }

    }
}
