<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>QR Code</title>
        <style media="screen">

            body {
                margin-left: 30%;
                background-color: #500000;
                font-family: sans-serif;
                color: #b2bec3;
            }

            img {
                width: 20%;
            }

            h1 {
                font-size: 35px;
            }
            p {
                font-size: 30px;
            }



        </style>
    </head>
    <body>
        <?php

        $users = App\AggieScanUser::all();
        foreach ($users as $user) :
            if ($user->uin == $uin) {?>
                <h1><?php echo $user->name ?></h1>
                <img class='qrCode' src="images/hs_{{$user->uin}}.jpg" alt="qr_code">"
                <p>Name: <?php echo $user->name ?></p>
                <p>UIN: <?php echo $user->uin ?></p>
                <p>Cell Number: <?php echo $user->cell_num ?></p>
                <p>Facebook:<?php echo $user->facebook ?> </p>
                <p>Snapchat: <?php echo $user->snap ?></p>
                <p>Twitter: <?php echo $user->twitter ?></p>
                <p>Major:<?php echo $user->major ?> </p>
                <p>Graduation Year: <?php echo $user->year ?></p>
                <?php
            }
        endforeach; ?>

    </body>
</html>
