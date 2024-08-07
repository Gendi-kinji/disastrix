<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RoleNotification extends Notification
{
    use Queueable;
    protected $role;

    /**
     * Create a new notification instance.
     */
    public function __construct($role)
    {
        $this->role=$role;

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
                    ->line('You have been assigned a new role,'.$this->role)
                    ->action('Please login again', url('/login'))
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
            'message'=> 'Your role has been changed to'.$this->role->name,
            'role_name'=>$this->role->name,
            
        ];
    }
}
