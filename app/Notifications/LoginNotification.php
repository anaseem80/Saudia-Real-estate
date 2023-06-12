<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoginNotification extends Notification
{
    use Queueable;
    public $massge;
    public $fromemail;
    public $mailer;
    public $subject;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->massge="You just Logged in";
      $this->fromemail="test@yahao.com";
      $this->subject="New logged in";
      $this->mailer="smtp";
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
                    ->mailer("smtp")->subject($this->subject)->greeting('hello'.$notifiable->name)->line($this->massge);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
