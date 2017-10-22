<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ConversationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const trigger_words =[
      'bad thing',
      'everything',
      'wrong',
      'help',
      'emergency',
      'really'
    ];
    const responses =[
      'such a bad thing... I need you now!',
      'please come now',
      'so much is wrong, please come help!',
      'just stop messing about and come help me!',
      'yes its an emergency',
      'yes really! right now!',      
    ];
    
    public function Respond(String $input){
        // check if the input has any special words, and if so, respond accordingly
        $responses = [];
        $length = count(trigger_words);
        for($index = 0; $index < $length; $index++ ){
          $word = trigger_words[$index];
          if(strpos($input,$word) > 0){
            array_push($triggers, $index);
          }
        }
        switch(count($triggers)){
          case 0:{
            // no relevant triggers, so let's use a random response
            $response = rand(0,$length);
            return responses[$response];
          }
          case 1:{
            //easy one, just return the relevant trigger
            $response = $triggers[0];
            return responses[$response];
          }
          default:{
            //send a random one of the responses
            $response = rand(0,count($triggers));
            return responses[$triggers[$response]];
          }
        }
    }
}