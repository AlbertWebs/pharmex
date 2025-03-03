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

    // mailAdmin($Subject,$MessageToSend);

    public static function mmailAdmin($Subject,$MessageToSend){
        $data = array(
            'content'=>$MessageToSend,
            'subject'=>$Subject,
        );
        $email = "info@designekta.com";
        $Sender = "Pharmex";
        $SenderEmail = "mail@pharverse.com";
        Mail::send('mailTheme', $data, function($message) use ($email,$Subject,$Sender,$SenderEmail){
            $message->from($SenderEmail , $Sender);
            $message->to($email, $Sender)->cc('albertmuhatia@gmail.com')->subject($Subject);
        });
    }

    public static function mailRfq($content,$email,$SaveFilePath){
        $MessageToSend = "$content Download the file at $SaveFilePath";
        $Subject = "RFQ";
        $data = array(
            'content'=>$MessageToSend,
            'subject'=>$Subject,
            'SaveFilePath'=>$SaveFilePath,
        );
        $Sender = "Pharmex";
        $SenderEmail = "mail@pharverse.com";
        Mail::send('mailTheme', $data, function($message) use ($email,$Subject,$Sender,$SenderEmail){
            $message->from($SenderEmail , $Sender);
            $message->to($email, $Sender)->cc('albertmuhatia@gmail.com')->subject($Subject);
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

    public static function notification($sendTo,$SendToID,$MessageToSend,$Subject){
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



    public static function MailSupplier($SupplierEmail,$SupplierName,$InvoiceNumber){
        $message = 'Hello '.$SupplierName.' You have a new Order, We have created a summary of the order below:';
        $subject = 'Supplier Your Invoice Has Been Created';
        $CartItems = \Cart::Content();

        $data = array(
            'invoicenumber'=>$InvoiceNumber,
            'content'=>$message,
            'subject'=>$subject,
            'CartItems'=>$CartItems,
        );

        $appName = "Pharmex";
        $appEmail = "info@designekta.com";

        $FromVariable = "no-reply@designekta.com";
        $FromVariableName = "Pharmex";

        $toVariable = $SupplierEmail;
        $toVariableName = $SupplierName;

        Mail::send('emailSupplier', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@designekta.com')->bcc('albertmuhatia@gmail.com')->subject($subject);
        });
    }

    public static function mailUser($email,$name,$InvoiceNumber){
        $message = 'Hello '.$name.' Your Order has been received, We have created a summary of the order below:';
        $subject = 'Your Order Has Been Received';
        $CartItems = \Cart::Content();

        // Process Cart

        //The Generic mailler Goes here
        $data = array(
            'invoicenumber'=>$InvoiceNumber,
            'content'=>$message,
            'subject'=>$subject,
            'name'=>$name,
            'CartItems'=>$CartItems,

        );
        $appName = config('app.name');
        $appEmail = config('mail.username');

        $FromVariable = "no-reply@pharmex.com";
        $FromVariableName = "Pharmex Works";

        $toVariable = $email;

        $toVariableName = $name;


        Mail::send('emailClient', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@designekta.com')->bcc('albertmuhatia@gmail.com')->subject($subject);
        });
    }


}


