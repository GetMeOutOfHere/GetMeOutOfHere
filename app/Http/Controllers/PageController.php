<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SMSQueue;
use Auth;
use Session;
use Carbon\Carbon;
use Log;

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
                $fake_sender_name = $request->input('fake_sender_name');
                $fake_sender_number = $request->input('fake_sender_number');
                $send_to = $request->input('send_to');
                $message = $request->input('message');
                $send_time = $request->input('send_time');
                list($y, $m, $d, $h, $mi, $s) = explode("/", $send_time);
                $date = Carbon::create($y, $m, $d, $h, $mi, $s, "Asia/Phnom_Penh");
                Log::info($send_time." ".$date." ". $y." " .$m." ". $d." " .$h." ". $mi." ". $s);
                $sms = SMSQueue::create([
                    'fake_sender_name' => $fake_sender_name,
                    'fake_sender_number' => $fake_sender_number,
                    'send_to' => $send_to,
                    'message' => $message,
                    'send_time' => $date
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
