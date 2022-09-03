<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class RequestPartnerNotify extends Notification
{
    use Queueable;
    protected $pass;
    protected  $user;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user,$pass)
    {
        $this->pass=$pass;
        $this->user=$user;
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
        $body=sprintf(
            'My Dear %s You have been accepted as a partner in our team your account 
            email : %s
            password :%s ',
            $this->user->username,
            $this->user->email,
            $this->pass,

            );
        return (new MailMessage)
        ->line($body)
        ->line('Thank you for using our application!');
        /*
        $body=sprintf(
            'My Dear %s , the partnership request with WATAN TEAM has been approved',
             $this->notifiable->username,
            );
        $account=sprintf(
            'Company account to login :
             email:%s
             password:%s
             ',
             $notifiable->email,
            $this->pass,);
            $message=new MailMessage;
            $message->subject('Partnership application accepted')
                    ->line('Watan Team')
                    ->from('watan@gmail.com')
                    ->greeting('Hello', $notifiable->username)
                    ->line($body)
                    ->line($account)
                 //   ->action('Login', route('auth.login'))
                   ->line('Thank you for your trust');
                   */
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
