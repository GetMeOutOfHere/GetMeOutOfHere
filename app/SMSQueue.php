<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Log;
use Auth;

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
        $chargeClient = new Client();
        $send_sms_endpoint = "https://mife.smart.com.kh:8243/smsmessaging/v1/outbound/tel:+855/requests";
        $charge_api = "https://mife.smart.com.kh:8243/payment/v1/charge";
        $api_access_token = "Bearer 0c0385e5-8e75-36a6-b17d-9095dfa5b81e";
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

        $charge_data = [
           "amountTransaction" => [
              "clientCorrelator" => uniqid("GET-ME-OUT-OF-HERE-", true),
              "endUserId" => "tel:+".$this->send_to,
              "paymentAmount" => [
                 "chargingInformation" => [
                    "amount" => "0.01",
                    "currency" => "USD",
                    "description" => "Get me out of here subscription."
                ],
                 "chargingMetaData" => [
                    "onBehalfOf" => "Get me out of here Inc",
                    "channel" => "WAP",
                    "taxAmount" => "0"
                ]
              ],
              "referenceCode" => "HACKANTON-001",
              "transactionOperationStatus" => "Charged"
          ]
        ];

        $chargeClient->request('POST', $charge_api, [
            'headers' => [
                'Authorization' => $api_access_token,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'body' => json_encode($charge_data)
        ]);

        $message->update(['send_status' => 2]);

    }

}





