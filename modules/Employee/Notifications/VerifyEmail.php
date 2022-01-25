<?php

namespace Modules\Employee\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\Employee\Entities\Employee;

class VerifyEmail extends Notification
{
    use Queueable;

    public function __construct(Employee $employee)
    {
        //
        $this->employee=$employee;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)  
        ->line('Hi '.$this->employee->name)
        ->subject('Verify Email Address')
        ->line('Thanks for subscribing to Task egy designer company , But before you can use your account you need to confirm that your real person who wants emails from us!')
        ->line( new \Illuminate\Support\HtmlString( 'If you are, write code in application : '.'<strong>'. $this->employee->code_verify . '</strong>') )
        ->line('Thank you for using our application!');
    }


}
