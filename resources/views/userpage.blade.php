<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>QR Code</title>
        <style media="screen">

        </style>
    </head>
    <body>
        <?php
            $SnaggedUser = '';
            $users = App\AggieScanUser::all();
            foreach ($users as $user) :
                if ($user->uin == $uin) {
                    $SnaggedUser = $user
                }
            endforeach; ?>
        <h1><?php echo $SnaggedUser->name ?></h1>
        <img class='qrCode' src="images/qr_{{$SnaggedUser->uin}}.png" alt="qr_code">"
        <p>Name: <?php echo $SnaggedUser->name ?></p>
        <p>UIN: <?php echo $SnaggedUser->uin ?></p>
        <p>Cell Number: <?php echo $SnaggedUser->cell_num ?></p>
        <p>Facebook:<?php echo $SnaggedUser->facebook ?> </p>
        <p>Snapchat: <?php echo $SnaggedUser->snap ?></p>
        <p>Twitter: <?php echo $SnaggedUser->twitter ?></p>
        <p>Major:<?php echo $SnaggedUser->major ?> </p>
        <p>Graduation Year: <?php echo $SnaggedUser->year ?></p>

    </body>
</html>
