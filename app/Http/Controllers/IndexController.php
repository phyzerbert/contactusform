<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailMembership;
use App\Mail\SendMailFreeze;
use App\Mail\SendMailTrial;
use App\Mail\SendMailCancelation;

class IndexController extends Controller
{
    
    
    public function membership(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $data = $request->all();
        $pdf = PDF::loadView('pdf.membership', compact('data'));
        Mail::to($data['email'])->send(new SendMailMembership($data, $pdf));
        Mail::to(env('ADMIN_EMAIL'))->send(new SendMailMembership($data, $pdf));
        return back()->with('success', 'Email is sent successfully');
    }    
    
    public function freeze(Request $request){
        // $request->validate([
        //     // 'email' => 'required|email',
        // ]);
        $data = $request->all();
        $pdf = PDF::loadView('pdf.freeze', compact('data'));
        Mail::to(env('ADMIN_EMAIL'))->send(new SendMailFreeze($data, $pdf));
        return back()->with('success', 'Email is sent successfully');
    }  

    public function trial(Request $request){
        // $request->validate([
        //     // 'email' => 'required|email',
        // ]);
        $data = $request->all();
        // dd($data);
        $pdf = PDF::loadView('pdf.trial', compact('data'));
        Mail::to(env('ADMIN_EMAIL'))->send(new SendMailTrial($data, $pdf));
        return back()->with('success', 'Email is sent successfully');
    }

    public function cancelation(Request $request){
        // $request->validate([
        //     // 'email' => 'required|email',
        // ]);
        $data = $request->all();
        // dd($data);
        $pdf = PDF::loadView('pdf.cancelation', compact('data'));
        Mail::to(env('ADMIN_EMAIL'))->send(new SendMailCancelation($data, $pdf));
        return back()->with('success', 'Email is sent successfully');
    }



    public function testpdf(){
        $data = array(
            "_token" => "fwprPpqldqfKtxRbja1OJyws1naVlGBZq66fLABt",
            "last_name" => "Zhang",
            "first_name" => "Yuyuan",
            "signer_last_name" => "Yang",
            "signer_first_name" => "Ping",
            "expiration_date" => "15/08/2019",
            "cancelation_date" => "13/08/2019",
            "last_debit_date" => "14/08/2019",
            "cancelation_amount" => "100000",
            "date_paid" => "14/08/2019",
            "reason" =>  [
                0 => "Medical",
                1 => "Work Trip",
                2 => "Financial Issues",
                3 => "Temperary Schedule Issues",
            ],
            'signature' => "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",
            "signature_date" => "31/07/2019",
        );
        $pdf = PDF::loadView('pdf.cancelation', compact('data'));
        return $pdf->download('email.pdf');
        // return view('pdf.cancelation', compact('data'));
    }
}
