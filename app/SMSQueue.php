<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Log;

class SMSQueue extends Model
{
    protected $table = "sms_queues";
    protected $fillable = [
        'fake_sender_name',
        'fake_sender_number',
        'send_to',
        'message',
        'send_time',
        'send_status'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'send_time'
    ];

    // Send sms to user
    public function sendSms($message){
        $client = new Client();
        $send_sms_endpoint = "https://mife.smart.com.kh:8243/smsmessaging/v1/outbound/tel:+855/requests";
        $api_access_token = "Bearer daf0eba2-602f-3b45-abcf-a7ccfbe5f625";
        $data = [
            "outboundSMSMessageRequest" => [
                "address" => [
                    "tel:+".$this->send_to
                ],
                "senderAddress" => "tel:+310",
                "outboundSMSTextMessage" => [
                    "message" =>  $this->message
                ],
                "clientCorrelator" => "123457:AIN12346",
                "receiptRequest" => [
                    "senderName" => $this->fake_sender_name
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

        $message->update(['send_status' => 1]);
    }

}
