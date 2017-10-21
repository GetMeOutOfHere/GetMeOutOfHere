<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use DB;
use App\SMSQueue;
use Guzzle\Http\Client;

class SendFakeSMS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send sms queue in database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Set locale and create datetime
        Carbon::setLocale('km');
        $messages = SMSQueue::where([
                            ['send_status', 0],
                            ['send_time', '<=', Carbon::now('Asia/Phnom_Penh')]
                        ])
                        ->get();
        foreach ($messages as $key => $message) {
            $message->sendSms($message);
            $this->line("[".Carbon::now('Asia/Phnom_Penh')."] Successfully send fake sms to ".$message->send_to);
        }
    }
}
