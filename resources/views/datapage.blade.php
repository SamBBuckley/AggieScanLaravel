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
            margin: auto;
            width: 50%;
            border: 4px solid black;
            padding: 10px;
        }

    </style>
    </head>
    <body>
        <?php $users = App\AggieScanUser::all(); ?>
        <?php foreach ($users as $user) :
            if ($user->uin == $uin) {?>
                <img class='qrCode' src="images/qr_{{$uin}}.png" alt="qr_code"><?php
            }
        endforeach; ?>



    </body>
</html>
