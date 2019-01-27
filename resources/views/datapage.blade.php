<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>QR Code</title>
    <style media="screen">
        body {
            background-color: #990000;
        }

        .qrCode {
            padding-top: 50%;
        }

    </style>
    </head>
    <body>
        @foreach (App\AggieScanUser::all() as $user)
            @if ($user->uin == {{$uin}})
                {{$location = 'qr_' + $user->uin}}
                <img class="qrCode" src={{ asset($location) }} alt="qr_code">
            @endif
        @endforeach


    </body>
</html>
