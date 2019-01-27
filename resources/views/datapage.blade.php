<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>QR Code</title>
    <style media="screen">
        body {
            background-color: #500000;
        }

        .qrCode {
            margin-top: 21%;
            margin-left: 25%;
            position: absolute;
            width: 50%;
            height: auto;
        }

    </style>
    </head>
    <body>
        <?php $users = App\AggieScanUser::all(); ?>
        <?php foreach ($users as $user) :
            if ($user->uin == $uin) {?>
                <img class='qrCode' src="images/qr_{{echo $uin}}.png" alt="qr_code"><?php
            }
        endforeach; ?>



    </body>
</html>
