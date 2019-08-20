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
        table#table-cancellation>tbody>tr>td {
            height: 50px;;
            font-size: 16px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="main py-4">
        <div class="container-fluid">
            <div class="card card-body w-100" style="position:relative">
                <div style="position:absolute;top:0">
                    <h5 class="mt-0">GRACIE BARRA</h5>
                    <P>Membership Cancellation<br> Request Form</P>
                </div>
                <div class="">
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td align="center">
                                    <img class="d-block" src="{{asset('images/logo.png')}}" width="100" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>                    
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="w-100" id="table-cancellation">
                                <tbody>
                                    <tr>
                                        <td class="w-50">Student Last Name : <span class="item-value">{{$data['last_name']}}</span></td>
                                        <td class="w-50">Student First Name : <span class="item-value">{{$data['first_name']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Co-Signer's Last Name : <span class="item-value">{{$data['signer_last_name']}}</span></td>
                                        <td class="w-50">Co-Signer's First Name : <span class="item-value">{{$data['signer_first_name']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Agreement Expiration Date : <span class="item-value">{{$data['expiration_date']}}</span></td>
                                        <td class="w-50">Agreement Cancellation Date : <span class="item-value">{{$data['cancellation_date']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Last Debit Date : <span class="item-value">{{$data['last_debit_date']}}</span></td>
                                        <td class="w-50">Agreement Cancellation Amount : <span class="item-value">{{$data['cancellation_amount']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="w-50">Date Paid : <span class="item-value">{{$data['date_paid']}}</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="w-50">Reason : <span class="item-value">{{implode(', ', $data['reason'])}}</span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="w-100 mt-5">                                
                                <h4 class="font-weight-bold" style="text-decoration: underline">Cancellation Policy</h4>
                                <p>A minimum of one month (two billing cycles) written notice is required for cancellation of your membership. Notice must be given in writing by completing a Gracie Barra Surfers Paradise cancellation form. This can be submitted in person, or by email to info@gbsurfersparadise.com.au. </p>
                                <p>You may cancel without four weeks notice only under the following circumstances:</p>
                                <ul>
                                    <li>You relocate your residence to more than 20km from any Gracie Barra school. A lease agreement or bill for the new address must be supplied as documentation.</li>
                                    <li>You experience a sudden medical condition that would prevent you from continuing to train Brazilian Jiu Jitsu in the future. A medical certificate is required as documentation.</li>
                                    <li>You experience unexpected unemployment. Proof of unemployment must be provided. All membership payments must be paid up to date prior to submitting your cancellation request. You may continue to train throughout your four week cancellation period.</li>
                                </ul>
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
