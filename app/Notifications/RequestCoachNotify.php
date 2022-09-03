<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Coach;
use App\Models\User;

class RequestCoachNotify extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    //protected $pass;
    protected $user;
    protected $pass;
    public function __construct(User $user,$pass)
    {
        $this->user=$user;
        $this->pass=$pass;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
       return $via[] = 'mail';
      
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
            'My Dear %s You have been accepted as a coach in our team your account 
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
        //attempt to read property view on null notification laravel
        $body=sprintf(
            'My Dear %s , You have been accepted as a coach in our team',
            $this->user->username,
            );
        $account=sprintf(
            'Coache account to login :
             email:%s
             password:%s
             ',
             $this->user->email,
             $this->user->username,
            );
            $message=new MailMessage;
            $message->subject('Join request')
                    ->line('Watan Team')
                    ->from('watan@gmail.com')
                    ->greeting('Hello',  $this->user->username)
                    ->line($body)
                    ->line($account)
                    
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
