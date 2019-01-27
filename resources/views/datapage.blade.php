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
        <ul>
            @foreach (App\AggieScanUser::all() as $user)
                <li>{{$user->uin}}/li>
            @endforeach
        </ul>



    </body>
</html>
