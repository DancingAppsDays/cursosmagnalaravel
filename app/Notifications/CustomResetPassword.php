<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use Symfony\Component\Console\Output\ConsoleOutput;

class CustomResetPassword extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {

           $output = new ConsoleOutput();
    $output->writeln($token);
        //
        $this->token = $token;
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
                //couldnot use url() here, it changed localhost4200 to 8000, oddly the seocond part was correct
                //env('FRONTEND_URL') doest work in here, it gets empty
        
                return (new MailMessage)
                    ->subject('Recuperar cuenta')
                    ->line('Has solicitado recuperar tu contraseña.')
                    ->action('Cambia tu contraseña','https://magna.stratos360.com.mx'.'/resetpass/'.$this->token)
                    ->line('Si no has solicitado esto, por favor ignora este mensaje.');
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
