<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SMSQueue;
use Auth;
use Session;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Log;

class PageController extends Controller
{

    /**
     * Dashboard for authenticated user
     *
     * @var $request
     */
    public function dashboard(Request $request){
        if(Auth::user()){
            return view('layouts/sms_queue');
        }else{
            return redirect('/login');
        }
    }


    /**
     * Schedule SMS to be send
     *
     * @var $request
     */
    public function scheduleSms(Request $request){
        if($request->isMethod('get')){
            return redirect('/dashboard');
        }
        if(Auth::user()){
            if($request->isMethod('post')){
                $fake_sender_name = $request->input('fake_sender_name');
                // $fake_sender_number = $request->input('fake_sender_number');
                $send_to = $request->input('send_to');
                $message = $request->input('message');
                $send_time = $request->input('send_time');

                Log::info($send_time);

                list($y, $m, $d, $h, $mi, $s) = explode("/", $send_time);
                $date = Carbon::create($y, $m, $d, $h, $mi, $s, "Asia/Phnom_Penh");
                $sms = SMSQueue::create([
                    'fake_sender_name' => $fake_sender_name,
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


    /**
     * Send a quick random SMS.
     *
     * @var $request
     */
    public function sendQuickSMS(Request $request){

        if($request->isMethod('get')){
            // Check if user authenticated
            if(Auth::user()){
                $client = new Client();
                $send_sms_endpoint = "https://mife.smart.com.kh:8243/smsmessaging/v1/outbound/tel:+855/requests";
                $api_access_token = "Bearer daf0eba2-602f-3b45-abcf-a7ccfbe5f625";
                $data = [
                    "outboundSMSMessageRequest" => [
                        "address" => [
                            "tel:+".Auth::user()->phonenumber
                        ],
                        "senderAddress" => "tel:+310",
                        "outboundSMSTextMessage" => [
                            "message" =>  $request->input('message')
                        ],
                        "clientCorrelator" => "123457:AIN12346",
                        "receiptRequest" => [
                            "senderName" => "unknown"
                        ]
                    ]
                ];

                $client->request('POST', $send_sms_endpoint, [
                    'headers' => [
                        'Authorization' => $api_access_token,
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json'
                    ],
                    'body' => json_encode($data)
                ]);

            }else{
                Session::flash('error', 'Session expired, please login.');
                return redirect('/login');
            }
        }
    }

    public function deliveryInfoNotification(Request $request){
        Log::info("Received notification request");
    }
}
