<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HtmlNotification extends Notification implements ShouldQueue {
    use Queueable;
    public string $subject;
    public string $html;
    public string $from;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $from,string $subject, string $html) {
        $this->from=$from;
        $this->subject = $subject;
        $this->html = $html;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        return (new MailMessage())
            ->from($this->from)
            ->subject($this->subject)
            ->line('---')
            ->view('notify::notifications.html', ['html' => $this->html]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable) {
        dddx($notifiable);

        return [
        ];
    }
}
