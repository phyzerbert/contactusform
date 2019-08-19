<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{asset('images/logo.png')}}" width="80" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h3 class="mt-3">MEMBERSHIP AGREEMENT</h3>
                                    <P>
                                    </P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
