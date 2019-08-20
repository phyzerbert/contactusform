<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    <link href="plugins/sign/css/jquery.signaturepad.css" rel="stylesheet">
    
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('plugins/sign/js/numeric-1.2.6.min.js')}}"></script>
    <script src="{{asset('plugins/sign/js/bezier.js')}}"></script>
    <script src="{{asset('plugins/sign/js/jquery.signaturepad.js')}}"></script>
    <script src="{{asset('plugins/sign/js/html2canvas.js')}}"></script>
    <script src="{{asset('plugins/sign/js/json2.min.js')}}"></script>
</head>
<body>
    <div class="main py-4">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Email is sent successfully !</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mx-auto d-flex">
                                        <img class="mx-auto" style="margin:auto" src="{{asset('images/logo.png')}}" width="120" alt="">
                                    </div>
                                    <div style="position:absolute;top:0">
                                        <h3 class="mt-0">SURFERS PARADOISE</h3>
                                        <P>Membership Suspension Request Form</P>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('freeze')}}" method="post" id="freeze_form">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">Student Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Student Last Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Student First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter Student First Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name">Agreement Expiration Date</label>
                                    <input type="text" class="form-control" name="expiration_date" placeholder="Enter Here" />
                                </div>
                                <div class="form-group">
                                    <label for="first_name">Reason : </label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="reason[]" value="Medical" />Medical
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="reason[]" value="Work Trip" />Work Trip
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="reason[]" value="Financial Issues" />Financial Issues
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="reason[]" value="Temperary Schedule Issues" />Temperary Schedule Issues
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="reason[]" value="Other" />Other
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">Suspension Starting Date</label>
                                        <input type="text" class="form-control datepicker" name="start_date" autocomplete="off" placeholder="Enter Cancelation Date" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Suspension End Date</label>
                                        <input type="text" class="form-control datepicker" name="end_date" autocomplete="off" placeholder="Enter Last Debit Date" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold" style="text-decoration: underline">Program Information and Payments</h4>
                                        <p>This Membership Agreement is made with Gracie Barra Surfers Paradise (Mat Time Pty Ltd). When you sign this agreement you are signing a legally biding contract. This contract sets out your rights and responsibilities as a member. The contents of this agreement override any statements made previously by either party, unless noted separately on this agreement. If you have any queries regarding this agreement, please discuss with us before you sign.</p>

                                        <h4 class="font-weight-bold" style="text-decoration: underline">Payment Service Provider</h4>
                                        <p>Payment services for this membership are supplied by our payment service provider Intergrapay(https://console.integrapay.com.au) You will be asked to provide your payment details (BSB and Account) to Integrapay on sign up. You will be presented and must agree to Integrapay's terms and conditions when doing so which includes paying all fees associated with yoiur payments through the IntegraPay system. </p>

                                        <h4 class="font-weight-bold" style="text-decoration: underline">General Terms</h4>
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
                                        <h5 class="font-weight-bold" style="text-decoration: underline">Particular risks but not limited to include:  </h5>
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
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="font-weight-bold">Signature</h6>
                                                <input type="hidden" name="signature" id="signature" />
                                                <div class="card card-body sign_area" style="width:345px;">
                                                    <div class="sig sigWrapper" style="height:102px;">
                                                        <div class="typed"></div>
                                                        <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
                                                    </div>
                                                </div>
                                                <a href="#" id="btnClearSign">Clear</a>
                                            </div> 
                                            <div class="col-md-12 mt-3">
                                                <label class="font-weight-bold" for="parent_signature_date">Date</label>
                                                <input type="text" class="form-control datepicker-bottom" name="signature_date" value="{{date('d/m/Y')}}" autocomplete="off" id="parent_signature_date" placeholder="Enter Date" />
                                            </div>                                     
                                        </div>
                                                                              
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <button type="button" id="btn-submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script>
        $(document).ready(function(){

            $(".datepicker").datepicker({
                orientation: 'auto bottom',
                format: 'dd/mm/yyyy',
            });

            $(".datepicker-bottom").datepicker({
                orientation: 'auto top',
                format: 'dd/mm/yyyy',
            });

            $('.sign_area').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});

            $("#btn-submit").click(function(){
                html2canvas([document.getElementById('sign-pad')], {
					onrendered: function (canvas) {
						let canvas_img_data = canvas.toDataURL('image/png');
						let img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
                        $("#signature").val(img_data);	
                        $("#freeze_form").submit();							
					}
				});
            });
            
            $("#btnClearSign").click(function(e){
                e.preventDefault();
                $('.sign_area').signaturePad().clearCanvas ();
            });
        })
    </script>
</body>
</html>