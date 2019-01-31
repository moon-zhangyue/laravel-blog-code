<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;
use App\Jobs\Job;
use App\User;

class SendReminderEmail extends Job implements SelfHandling, ShouldQueue
{
//    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use InteractsWithQueue, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $user = $this->user;
        $mailer->send('emails.reminder', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email)->subject('新功能发布');
        });
    }
}
