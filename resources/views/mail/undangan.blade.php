<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="{{ $message->embed(asset('public/assets/bower_components/material/img/slider/logo.png')) }}">
    tes
    {{-- <div>{!!DNS2D::getBarcodeHTML(1, 'QRCODE')!!}</div></br> --}}
    <img src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=1&choe=UTF-8">
</body>
</html>