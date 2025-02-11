<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mail;

class SendEmail extends Model
{

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

    public static function notifications($sendTo,$SendToID,$MessageToSend){
        $Subject = "Listing Approved";
        // dd($SendToID);
        $data = array(
            'content'=>$MessageToSend,
            'subject'=>$Subject,
        );
        $Sender = "Pharmex By Pharverse";
        $SenderId = "mailer@africanpharmaceuticalreview.com";
        Mail::send('mailTheme', $data, function($message) use ($SendToID,$sendTo,$Subject,$Sender,$SenderId){
            $message->from($SenderId , $Sender);
            $message->to($SendToID, $sendTo)->cc('albertmuhatia@gmail.com')->subject($Subject);
        });
    }
}


