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
                                    <img src="{{asset('images/logo.png')}}" id="logo-img" width="120" alt="">
                                </div>
                                <div class="col-md-10" id="title">
                                    <h3 class="mt-3">SURFERS PARADISE</h3>
                                    <P>Membership Suspension Request Form</P>
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
                                        <label for="first_name">Student First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter Student First Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Student Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Student Last Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" />
                                        @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Agreement Expiration Date</label>
                                        <input type="text" class="form-control datepicker" name="expiration_date" autocomplete="off" placeholder="Enter Here" />
                                    </div>
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
                                        <h4 class="font-weight-bold" style="text-decoration: underline">Suspension Policy</h4>
                                        <p>You can suspend their membership for up to 12 weeks within any 12 month period. If you require a longer suspension period you will need to provide proof of medical , travel or hardship reasons. The minimum freeze period is one billing period of 2 weeks. 14 days written notice via a completed suspension form is required for any suspension. unless for medical or injury reasons . In this case a medical certificate should be supplied. All membership payments must be up to date prior to submitting your application for suspension of membership.</p>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
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
