<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .form-control { border-radius: 4px; font-size: 14px; font-weight: 500; width: 100%; height: 70px; padding: 14px 18px; line-height: 1.42857143; border: 1px solid #dfe2e7; background-color: #dfe2e7; text-transform: capitalize; letter-spacing: 0px; margin-bottom: 16px; -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); -webkit-appearance: none; }

        input[type=radio].with-font, input[type=checkbox].with-font { border: 0; clip: rect(0 0 0 0); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute; width: 1px; }
        input[type=radio].with-font~label:before, input[type=checkbox].with-font~label:before { font-family: FontAwesome; display: inline-block; content: "\f1db"; letter-spacing: 10px; font-size: 1.2em; color: #dfe2e7; width: 1.4em; }
        input[type=radio].with-font:checked~label:before, input[type=checkbox].with-font:checked~label:before { content: "\f00c"; font-size: 1.2em; color: #0943c6; letter-spacing: 5px; }
        input[type=checkbox].with-font~label:before { content: "\f096"; }
        input[type=checkbox].with-font:checked~label:before { content: "\f046"; color: #0943c6; }
        input[type=radio].with-font:focus~label:before, input[type=checkbox].with-font:focus~label:before, input[type=radio].with-font:focus~label, input[type=checkbox].with-font:focus~label { }

        .box { background-color: #fff; padding: 50px; margin-bottom: 40px; }
        .box-title { margin-bottom: 30px; text-transform: uppercase; font-size: 16px; font-weight: 700; color: #094bde; letter-spacing: 2px; }
        .plan-selection { padding-bottom: 25px; margin-bottom: 35px; }
        .plan-selection:last-child { border-bottom: 0px; margin-bottom: 0px; padding-bottom: 0px; }
        .plan-data { position: relative; }
        .plan-data label { font-size: 20px; margin-bottom: 15px; font-weight: 400; }
        .plan-text { padding-left: 35px; }
        .plan-price { position: absolute; right: 0px; color: #094bde; font-size: 20px; font-weight: 700; letter-spacing: -1px; line-height: 1.5; bottom: 43px; }
        .term-price { bottom: 18px; }
        .secure-price { bottom: 68px; }
        .summary-block { border-bottom: 2px solid #d7d9de; }
        .summary-block:last-child { border-bottom: 0px; }
        .summary-content { padding: 10px 0px; }
        .summary-price { padding-right: 5px; color: #094bde; font-size: 20px; font-weight: 400; letter-spacing: -1px; margin-bottom: 0px; display: inline-block; float: right; }
        .summary-small-text { font-weight: 700; font-size: 12px; color: #8f929a; }
        .summary-text { margin-bottom: -10px; }
        .summary-title { font-weight: 700; font-size: 14px; color: #1c1e22; text-align: right;}
        .summary-head { display: inline-block; width: 66%; }
        .p-border{border: 1px solid #f4f4f4;
            padding: 20px;
            margin: 10px 25px;}
        .t-border{
            margin: 10px 25px;}
        .widget { margin-bottom: 0px; background-color: #e9ebef; padding: 5px; border-radius: 6px; }
        .widget:last-child { border-bottom: 0px; }
        .widget-title { color: #094bde; font-size: 16px; font-weight: 700; text-transform: uppercase; margin-bottom: 25px; letter-spacing: 1px; display: table; line-height: 1; }

        .btn { font-family: 'Noto Sans', sans-serif; font-size: 16px; text-transform: capitalize; font-weight: 700; padding: 12px 36px; border-radius: 4px; line-height: 2; letter-spacing: 0px; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; word-wrap: break-word; white-space: normal !important; }
        .btn-default { background-color: #0943c6; color: #fff; border: 1px solid #0943c6; }
        .btn-default:hover { background-color: #063bb3; color: #fff; border: 1px solid #063bb3; }
        .btn-default.focus, .btn-default:focus { background-color: #063bb3; color: #fff; border: 1px solid #063bb3; }
        .invoice {
            position: relative;
            background: #fff;
            border: 1px solid #f4f4f4;
            padding: 20px;
            margin: 10px 25px;
        }
        .page-header {
            margin: 10px 0 20px 0;
            font-size: 22px;
        }
    </style>
</head>
<body>
<div class="container-fluid" id='app'>

    <nav-bar title="PADC E-Commerce">
        <nav-item href="{{ url('/') }}">Home</nav-item>
        @guest
            <nav-item href="{{ route('login') }}">Login</nav-item>
            <nav-item href="{{ route('register') }}">Register</nav-item>
        @else
            <nav-item href="{{ url('/home') }}">Profile</nav-item>
        @endguest
    </nav-bar>

    <div class="row">
        @yield('content')
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
