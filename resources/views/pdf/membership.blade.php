<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .item-value {
            text-decoration: underline;
        }
        table#table-member>tbody>tr>td {
            height: 50px;;
            font-size: 18px;
            font-weight: 600;
        }


    </style>
</head>
<body>
    <div class="main py-4">
        <div class="container-fluid">
            <div class="card card-body w-100 d-inline-block">
                <div class="w-25 float-left">
                    <img src="{{asset('images/logo.png')}}" class="mt-3" width="100" alt="">
                </div>
                <div class="w-75 float-right">
                    <h3 class="mt-3">MEMBERSHIP AGREEMENT</h3>
                    <P>Gracie Barra Sufers Paradise (Mat Time Pty Ltd. ABN: 51 624 990 352) Unit 5, 46 smith St Southport Qld 4215</P>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="w-100" id="table-member">
                                <tbody>
                                    <tr>
                                        <td class="w-50">First Name : <span class="item-value">{{$data['first_name']}}</span></td>
                                        <td class="w-50">Last Name : <span class="item-value">{{$data['last_name']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="w-50">Address : <span class="item-value">{{$data['address']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Email : <span class="item-value">{{$data['email']}}</span></td>
                                        <td class="w-50">Phone : <span class="item-value">{{$data['phone']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Date Of Birth : <span class="item-value">{{$data['date_of_birth']}}</span></td>
                                        <td class="w-50">Gender : <span class="item-value">{{$data['gender']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="w-50">
                                             Name of Parent or Guardian if under 18yrs : <span class="item-value">{{$data['parent_name']}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Emergency Contact : <span class="item-value">{{$data['emergency_contact']}}</span></td>
                                        <td class="w-50">Emergency No : <span class="item-value">{{$data['emergency_no']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="w-50">Payment Of Membership Fees : <span class="item-value">{{$data['membership_fees']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Membership Start Date : <span class="item-value">{{$data['start_date']}}</span></td>
                                        <td class="w-50">Direct Debit Payment Period : <span class="item-value">{{$data['direct_debit_payment_period']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Direct Debit Amount $ : <span class="item-value">{{$data['direct_debit_amount']}}</span></td>
                                        <td class="w-50">10 Class Pass Amount : <span class="item-value">{{$data['10_class_pass_amount']}}</span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="w-100 mt-5">
                                <h4 class="font-weight-bold" style="text-decoration: underline">Program Information and Payments</h4>
                                <p>This Membership Agreement is made with Gracie Barra Surfers Paradise (Mat Time Pty Ltd). When you sign this agreement you are signing a legally biding contract. This contract sets out your rights and responsibilities as a member. The contents of this agreement override any statements made previously by either party, unless noted separately on this agreement. If you have any queries regarding this agreement, please discuss with us before you sign.</p>

                                <h4 class="font-weight-bold" style="text-decoration: underline">Payment and Direct Debit Information</h4>
                                <p>Direct debit membership payments will be automatically deducted by our third party biller Integrapay(https://www.integrapay.com.au/). You will be asked to provide your banking details and agree to Integrapay's Terms and and Conditions to commence direct debit payments, including all associated fees charged by Integrapay. Please note that additional fees may be charged for direct debits from credit cards. If there are insufficient funds in your bank account/credit card when your membership fees are due , Integrapay will charge you a rejection fee after the second attempt to deduct payment. Membership payments are non-refundable . Direct debits are due regardless of classes missed unless you have supplied Grecie Barra Surfers Paradise with a written notice of suspension or cancellation in accordance with the policies below. A 10 class pass must be purchased in full prior to commencing the first class. </p>
                                <h4 class="font-weight-bold" style="text-decoration: underline">General Terms</h4>
                                <p></p>

                                <h4 class="font-weight-bold" style="text-decoration: underline"></h4>
                                <ol>
                                    <li>You agree to follow all direction given by management, instructors and other employees while at  Gracie Barra Surfers Paradise to ensure everyone safety and wellbeing.</li>
                                    <li>You are required to familiarise yourself with, and abide by, the official Gracie Barra Training Etiquette. This is displayed at the school, and can also be found at (https://graciebarra.com/why-gracie-barra/training-etiquette/)</li>
                                    <li>You are financially responsible for any damage caused by you, or minors you are responsible for, to Gracie Barra Surfers Paradise property or premises.</li>
                                    <li>Gracie Barra maintains zero tolerance of bullying or sexual harassment of any kind.</li>
                                    <li>The laws of Queensland govern this document. </li>
                                    <li>Gracie Barra reserves the right to use any images, video footage and  interviews of students of publication in a variety unless specific requested otherwise by student . Please see our privacy policy for more details. </li>
                                    <li>You are consents to us collecting ,using disclosing and dealing  with your personal information in accordance with our privacy policy ,and only for the purposes of the proper management of  Gracie Barra Surfers Paradise.</li>
                                </ol>

                                <h4 class="font-weight-bold" style="text-decoration: underline">Health and Safety</h4>
                                <p>You agree to provide us with all relevant health and fitness information, issues or injuries before or during any training, now or in the future that may affect you or others. Each time you attend Gracie Barra Sufers Paradise you must ensure you are in good physical condition and know of no medical or other reason why you should exercise. In unsure you should seek a medical opinion.</p>

                                <h4 class="font-weight-bold" style="text-decoration: underline">Attendance Times and Programs</h4>
                                <p>Gracie Barra Surfers Paradise reserves the right to alter the days, hours of operation and classes if deemed necessary to better fit the needs of the majority of its students.The student and co-signer agree unconditionally to pay the above membership fees regardless of their attendance.</p>

                                <h4 class="font-weight-bold" style="text-decoration: underline">Cooling off Period</h4>
                                <p>You can cancel this agreement within 7 days from the membership start date above by giving us written notice by email or in person.</p>

                                <h4 class="font-weight-bold" style="text-decoration: underline">Suspension Policy</h4>
                                <p>You can suspend their membership for up to 12 weeks within any 12 month period. If you require a longer suspension period you will need to provide proof of medical , travel or hardship reasons. The minimum freeze period is one billing period of 2 weeks. 14 days written notice via a completed suspension form is required for any suspension. unless for medical or injury reasons . In this case a medical certificate should be supplied. All membership payments must be up to date prior to submitting your application for suspension of membership.</p>

                                <h4 class="font-weight-bold" style="text-decoration: underline">Cancellation Policy</h4>
                                <p>A minimum of one month (two billing cycles) written notice is required for cancellation of your membership. Notice must be given in writing by completing a Gracie Barra Surfers Paradise cancellation form. This can be submitted in person, or by email to info@gbsurfersparadise.com.au. </p>
                                <p>You may cancel without four weeks notice only under the following circumstances:</p>
                                <ul>
                                    <li>You relocate your residence to more than 20km from any Gracie Barra school. A lease agreement or bill for the new address must be supplied as documentation.</li>
                                    <li>You experience a sudden medical condition that would prevent you from continuing to train Brazilian Jiu Jitsu in the future. A medical certificate is required as documentation.</li>
                                    <li>You experience unexpected unemployment. Proof of unemployment must be provided. All membership payments must be paid up to date prior to submitting your cancellation request. You may continue to train throughout your four week cancellation period.</li>
                                </ul>

                                <h4 class="font-weight-bold" style="text-decoration: underline">RISK WARNING & WAIVER </h4>
                                <p>You acknowledge that participation in martial arts(including Brazilian Jiu Jitsu and associated fitness programs such as Barrafit) Involves risk, including risk of personal injury, permanent disability and death</p>
                                <h5 class="font-weight-bold" style="text-decoration: underline">Particular risks but not limited to include:</h5>  
                                <ul>
                                    <li>Twists, sprains, bruising, broken bones and or other forms of physical injury; </li>
                                    <li>Spinal Injury;</li>
                                    <li>Paralysis; </li>
                                    <li>Death; </li>
                                    <li>In rare cases skin infections;</li>
                                </ul>
                                <p>Before you, or a person under your care, participate in any of our programs you should ensure you are aware of and understand all the risks involved. further, you should take into account how those risks may impact any existing health conditions now or in the future. If you are unsure about any potential risks to yourself or others you should consult your doctor prior to commencing training. You are required to disclose any such issues or conditions prior to taking part in our training. Gracie Barra Surfers Paradise may request you supply a letter from your doctor or practitioner should we have any health concerns related to your attendance.</p>
                                <h5 class="font-weight-bold" style="text-decoration: underline">Acknowledgment of these terms</h5>
                                <p>By signing this document, you acknowledge, agree and understand that you engage or participate in our Brazilian Jiu Jitsu (BJJ) or our BarraFit training program voluntarily and <ins class="font-weight-bold">at your own risk.</ins></p>
                                <p>By signing this document, you also acknowledge, agree, and understand that the risk warning above constitutes a 'risk warning' for the purposes of the relevant legislation, including for the purpose of:</p>
                                <ul>
                                    <li>Section 5M of the Civil Liability Act 2002 (NSW); and/or    </li>
                                    <li>Section 5I of the Civil Liability Act 2002 (WA)</li>
                                    <li>Civil Liability Act 2003 (Qld).  </li>
                                </ul>

                                <p>At any time you are unsure of your rights, you should seek legal advice before signing this document. </p>
                                <p>By signing this document, to the full extent permitted by law, you (or the person for whom or on whose behalf you are acquiring the services from Gracie Barra Surfers Paradise ) agree to waive and/or release Gracie Barra Surfers Paradise,  Mat Time PTY LTD its servants and agents, from any claim, right or cause of action which you or your heirs, successors, executors, administrators, agents and assigns might otherwise have against Gracie Barra Surfers Paradise, its servant and agents, for or arising out of your death or physical or mental  injury, disease, loss and damage, or economic loss of any description whatsoever which you may suffer or sustain in the course of or consequential upon or incidental to your participation in Brazilian Jiu Jitsu (BJJ) or any other form of exercise, such as our BarraFit program, whether caused by the negligence of Gracie Barra Surfers Paradise, its servant and agents, or otherwise.</p>

                                <p>You do not have to agree to exclude, restrict or modify or waive your rights against, or release, 
                                        Gracie Barra Surfers Paradise, its servants and agents, from any claims by signing this document, however 
                                        Gracie Barra Surfers Paradise may refuse to allow you to participate in the Brazilian Jiu Jitsu (BJJ) or our BarraFit training program, or to provide you with the associated services, if you do not agree to exclude, restrict, modify or waive your rights against, or release, the Gracie Barra Surfers Paradise, its servants and agents, by signing this document.   Even if you sign this document, you may still have further legal rights. 
                                        </p>

                                <p class="font-weight-bold">By signing this agreement, I acknowledge that I have read, I understand and I agree to all details, payments and policies related to this agreement.</p>
                                
                            </div>

                                
                            <div class="w-100 clearfix">
                                <div class="w-50 float-left">
                                    <h6 class="font-weight-bold">
                                        @php
                                            $age = date('Y') - date('Y', strtotime($data['date_of_birth']));
                                        @endphp
                                        @if ($age < 18)
                                            Signature of Parent
                                        @else
                                            Signature of Student
                                        @endif                                            
                                    </h6>
                                    <div class="card" style="height:105px;width:300px;">
                                        <img src="data:image/png;base64, {{$data['signature1']}}" alt="">
                                    </div>
                                    <h5 class="mt-4">Date : <span class="item-value">{{$data['parent_signature_date']}}</span>                                                                               
                                </div>
                                
                                <div class="w-50 float-right">
                                    <h6 class="font-weight-bold">Signature</h6>
                                    <div class="card" style="height:105px;width:300px;">
                                        <img src="data:image/png;base64, {{$data['signature2']}}" alt="">
                                    </div>
                                    <h5 class="mt-4">Date : <span class="item-value">{{$data['signature_date']}}</span>                                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
