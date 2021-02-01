<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Foundation\Console\MailMakeCommand;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:Email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all users every day';

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
       //$Users= User::where('email')->get();

       $Email=User::pluck('email')->toArray();
       $data=["title"=>'programming','body'=>'laravel'];
       foreach ($Email as $email){
           // how to send emails in laravel

           Mail::to($email)->send(new NotifyEmail($data));
       }
    }
}
