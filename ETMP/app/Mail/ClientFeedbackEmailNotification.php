<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\FeedbackNotification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientFeedbackEmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $status)
    {
        $this->notification_mail_data = $data;
        $this->action_status = $status;

        if ($this->action_status == "new") {
            $this->subject = "[EMTP - ".$data['program_code']." ".$data['program_name']."] New Client Feedback";
        }
        if ($this->action_status == "updated") {
            $this->subject = "[EMTP - ".$data['program_code']." ".$data['program_name']."] Updated Client Feedback";
        }

        FeedbackNotification::create([
            'subject' => $this->subject,
            'content' => $data['feedback_content'],
        ]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->action_status == "new") {
            return $this->from('notification.emtp.dp2@gmail.com', 'notification emtp')->subject($this->subject)->view('mail.notify_new_client_feedback',['mail_data'=>$this->notification_mail_data]);
        }
        if ($this->action_status == "updated") {
            return $this->from('notification.emtp.dp2@gmail.com', 'notification emtp')->subject($this->subject)->view('mail.notify_updated_client_feedback',['mail_data'=>$this->notification_mail_data]);
        }
    }
}
