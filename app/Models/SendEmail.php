<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mail;

class SendEmail extends Model
{
    use HasFactory;
    public static function sendEmail($Sender,$SenderId,$MessageToSend,$SubscriberName,$SubscriberId,$Subject){
        $data = array(
            'content'=>$MessageToSend,
            'subject'=>$Subject,
        );
        Mail::send('mailTheme', $data, function($message) use ($Subject,$Sender,$SenderId,$SubscriberId,$SubscriberName){
            $message->from($Sender , $SenderId);
            $message->to($SubscriberId, $SubscriberName)->cc('albertmuhatia@gmail.com')->subject($Subject);
        });
    }
}
