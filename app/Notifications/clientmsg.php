<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class clientmsg extends Notification
{
    use Queueable;
    private $postid;
    private $title;
    private $img;
    /**
     * Create a new notification instance.
     */
    public function __construct($postid,$title,$img)
    {
        $this->postid = $postid;
        $this->title = $title;
        $this->img = $img;
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
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'post_id'=>$this->postid,
            'title'=>$this->title,
            'img'=>$this->img,
        ];
    }
}
