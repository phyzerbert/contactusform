<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;

class IndexController extends Controller
{
    
    
    public function sendmail(Request $request){
        $data = $request->all();
        $pdf = PDF::loadView('pdf.test');
        try{
            Mail::send('email.membership', $data, function($message)use($data,$pdf) {
                $message->to($data["email"], 'Membership Agreement')
                ->subject('Membership Agreement')
                ->attachData($pdf->output(), "membership_agreement.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";
        }else{
           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";
        }


        return back()->with('success', 'Email is sent successfully');
    }
}
