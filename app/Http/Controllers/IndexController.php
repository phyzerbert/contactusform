<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class IndexController extends Controller
{
    
    
    public function sendmail(Request $request){
        $data = $request->all();
        $pdf = PDF::loadView('pdf.membership', compact('data'));
        Mail::to($data['email'])->send(new SendMailable($data, $pdf));
        Mail::to(env('ADMIN_EMAIL'))->send(new SendMailable($data, $pdf));
        return back()->with('success', 'Email is sent successfully');
    }

    public function testpdf(){
        $data = [
            "first_name" => "Yuyuan",
            "last_name" => "Zhang",
            "address" => "Zhenxing, Dandong, Liaoning, China",
            "email" => "xian1017@outlook.com",
            "phone" => "15641572188",
            "date_of_birth" => "14/08/2019",
            "gender" => "Male",
            "parent_name" => "Ping",
            "emergency_contact" => "Ping",
            "emergency_no" => "15641572188",
            "membership_fees" => "pre-payment for 10 Class Pass",
            "start_date" => "13/08/2019",
            "direct_debit_payment_period" => "Each Month",
            "direct_debit_amount" => "100",
            "10_class_pass_amount" => "10",
            "parent_signature_date" => "31/07/2019",
            "signature_date" => "31/07/2019",
        ];
        $pdf = PDF::loadView('pdf.membership', compact('data'));
        return $pdf->download('email.pdf');
        // return view('pdf.membership', compact('data'));
    }
}
