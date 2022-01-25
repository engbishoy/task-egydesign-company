<?php

namespace Modules\Employee\Notifications;

use Illuminate\Bus\Queueable;
use Modules\Employee\Entities\Employee;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeEmail extends Notification
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
        ->subject('Welcome '. $this->employee->name)
        ->line('Thanks for register to Task egy designer company')
        ->line('Thank you for using our application!');
    }
}
