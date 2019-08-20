<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trial</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    <link href="plugins/sign/css/jquery.signaturepad.css" rel="stylesheet">
    
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <style>
        @media(max-width: 768px){
            #title {
                position: relative !important;
                margin: 20px auto;
                text-align: center;
            }
            #logo {
                text-align: center
            }
        }
    </style>
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
                                <div class="col-md-2" id="logo">
                                    <img src="{{asset('images/logo.png')}}" width="120" alt="">
                                </div>
                                <div class="col-md-10" id="title">
                                    <h3 class="mt-3">Welcome to Gracie Barra Sufers Paradise</h3>
                                    <p>Trial / Casual Class Form</p>
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
                            <form action="{{route('trial')}}" method="post" id="trial_form">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Address" />
                                </div>                                
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" />
                                        @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone" />
                                    </div>
                                </div>                                
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">Date Of Birth</label>
                                        <input type="text" class="form-control datepicker" name="date_of_birth" id="birthday" autocomplete="off" placeholder="Enter Date Of Birth" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Gender</label>
                                        <div class="input-group mt-2">
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" checked name="gender" value="Male" />Male
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="gender" value="Female" />Female
                                                </label>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name">Name of Parent or Guardian if under 18yrs</label>
                                    <input type="text" class="form-control" name="parent_name" placeholder="Enter Here" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">Occupation</label>
                                        <input type="text" class="form-control" name="occupation" placeholder="Enter Occupation" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">How did you hear about us?</label>
                                        <input type="text" class="form-control" name="hear_us" placeholder="Enter Here" />
                                    </div>
                                </div>
                                <h4>Health Information</h4>
                                <div class="form-group">
                                    <label for="first_name">Do you have a Medical Condition we need to be aware of?</label>
                                    <input type="text" class="form-control" name="medical_condition" placeholder="Provide Details" />
                                </div>
                                <h4>Personal Jiu-Jitsu Objectives</h4>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">Do you have any previous Jiu-Jitsu Experience</label>
                                        <input type="text" class="form-control" name="experience" placeholder="Enter Experience" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Do you currently participate in any other sport or activity</label>
                                        <input type="text" class="form-control" name="participate" placeholder="Enter Here" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name">If not how long it has been since you participated in sport activity?</label>
                                    <input type="text" class="form-control" name="how_long_participated" placeholder="Enter Here" />
                                </div>

                                
                                <div class="form-group">
                                    <label for="">What are the 3 main benefits you expect to get out of your Brazilian Jiu-Jtsu?</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Fitness" />Fitness
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Discipline" />Discipline
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Self-Defence" />Self-Defence
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Reduce Stress" />Reduce Stress
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Respect" />Respect
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Self Confidence" />Self Confidence
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Concentration" />Concentration
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Coordination" />Coordination
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Balance" />Balance
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Character Building" />Character Building
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Focus" />Focus
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Fun" />Fun
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Competion" />Competion
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="benefits[]" value="Art of Jiu-Jitsu" />Art of Jiu-Jitsu
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold" style="text-decoration: underline">RISK WAITING & WAIVER</h4>
                                        <p>Mat Time PTY LTD(ABN: 51 624 990352) trading as Gracie Barra Surfers Paradise</p>

                                        <h4 class="font-weight-bold" style="text-decoration: underline">Risk Warning and Acknowledgement</h4>
                                        <p>Participation in Martial Arts such as Brazilian Jiu Jitsu(BJJ) Or our BarraFit program involves risks, including the risk of personal injury and dealth.</p>
                                        <h4 class="font-weight-bold" style="text-decoration: underline"></h4>
                                        <ul>
                                            <li>Twists, sprains, bruising, broken bones and or other forms of physical injury</li>
                                            <li>Spinal Injury</li>
                                            <li>Paralysis</li>
                                            <li>Death</li>
                                            <li>In rare cases skin infections</li>
                                        </ul>

                                        <p>Before you or a person under your parental or guardianship participate in any of our Brazilian Jiu Jitsu(BJJ) or other programs our at aour facility. You should ensuer that you are aware of, and properly understand, all of the risks involved. Further you should take into account how those risks may impact health condition from which you or the person under youir responsibility suffer now or in the future. If you are unsure of any potential health risks to yourself or others you should consult your doctor prior to taking part.You should disclose to us such issues taking part in any activities now and in the future we may ask you to supply a letter from your doctor before beginning or at any time we have health concern related to your attendance.</p>

                                        <h4 class="font-weight-bold" style="text-decoration: underline">Acknowledgment of these terms:</h4>
                                        <p></p>
                                        {{-- ********************* --}}
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="first_name">Name of the Participant</label>
                                        <input type="text" class="form-control" name="participant_name" placeholder="Enter Here" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Name of the Instructor/PD</label>
                                        <input type="text" class="form-control" name="instructor_name" placeholder="Enter Here" />
                                    </div>
                                </div>
                                
                                <div class="w-100" id="signaturePart">
                                    <div class="w-100">
                                        <h6 class="font-weight-bold">Signature</h6>
                                        <input type="hidden" name="signature" id="signature" />
                                        <div class="card card-body sign_area mw-100" style="width:345px;">
                                            <div class="sig sigWrapper" style="height:102px;">
                                                <div class="typed"></div>
                                                <canvas class="sign-pad mw-100" id="sign-pad" width="300" height="100"></canvas>
                                            </div>
                                        </div>
                                        <a href="#" id="btnClearSign">Clear</a>
                                    </div> 
                                    <div class="w-50">
                                        <label class="font-weight-bold" for="parent_signature_date">Date</label>
                                        <input type="text" class="form-control datepicker-bottom" name="signature_date" value="{{date('d/m/Y')}}" autocomplete="off" id="parent_signature_date" placeholder="Enter Date" />
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
                        $("#trial_form").submit();							
					}
				});
            });
            $("#btnClearSign").click(function(e){
                e.preventDefault();
                $('.sign_area').signaturePad().clearCanvas ();
            });

            // $("#birthday").change(function(){
            //     var d = new Date();
            //     let cur_year = d.getFullYear();
            //     let birth_year = parseInt($(this).val().slice(-4));
            //     let diff = cur_year - birth_year;
            //     if(diff < 18){
            //         $("#signaturePart").hide()
            //     }else{
            //         $("#signaturePart").show()
            //     }
            // });
        })
    </script>
</body>
</html>
