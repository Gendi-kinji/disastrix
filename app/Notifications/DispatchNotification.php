<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DispatchNotification extends Notification
{
    use Queueable;
    protected $incident;

    /**
     * Create a new notification instance.
     */
    public function __construct($incident)
    {
        $this->incident=$incident;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('You have been dispatched to this incident')
                    ->action('View incident', url('/incidents/'.$this->incident->id))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' =>'You are dispatched to incident '.$this->incident->id.' at location '.$this->incident->location,
            //
        ];
    }
}
