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
            font-size: 15px;
            font-weight: 500;
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
                    <h3 class="mt-3">SURFERS PARADISE</h3>
                    <P>Membership Suspension Request Form</P>
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
                                        <td class="w-50">Student First Name : <span class="item-value">{{$data['first_name']}}</span></td>
                                        <td class="w-50">Student Last Name : <span class="item-value">{{$data['last_name']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Email : <span class="item-value">{{$data['email']}}</span></td>
                                        <td class="w-50">Agreement Expiration Date : <span class="item-value">{{$data['expiration_date']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="w-50">Reason : <span class="item-value">{{implode(', ', $data['reason'])}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Suspension Starting Date : <span class="item-value">{{$data['start_date']}}</span></td>
                                        <td class="w-50">Suspension End Date : <span class="item-value">{{$data['end_date']}}</span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="w-100 mt-5">
                                <h4 class="font-weight-bold" style="text-decoration: underline">Suspension Policy</h4>
                                <p>You can suspend their membership for up to 12 weeks within any 12 month period. If you require a longer suspension period you will need to provide proof of medical , travel or hardship reasons. The minimum freeze period is one billing period of 2 weeks. 14 days written notice via a completed suspension form is required for any suspension. unless for medical or injury reasons . In this case a medical certificate should be supplied. All membership payments must be up to date prior to submitting your application for suspension of membership.</p>                                
                            </div>        
                            <div class="w-100">
                                <h6 class="font-weight-bold">Signature</h6>
                                <div class="card mt-3" style="height:105px;width:300px;">
                                    <img src="data:image/png;base64, {{$data['signature']}}" alt="">
                                </div>
                                <h5 class="mt-4">Date : <span class="item-value">{{$data['signature_date']}}</span>                                                                               
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
