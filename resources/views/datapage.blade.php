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

        <?php
        foreach (App\AggieScanUser as $user) {
            if ($user->uin === {{$uin}}) {
                <p>{{$uin}}</p>
            }
        }



    </body>
</html>
