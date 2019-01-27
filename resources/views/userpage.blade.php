<<<<<<< current
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User Data</title>
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
                <img src="images/qr_{{$uin}}.png" alt="alt">
                <p>Name: <?php echo $user->name ?></p>
                <p>UIN: <?php echo $user->uin ?></p>
                <p>Cell Number: <?php echo $user->cell_num ?></p>
                <p>Facebook: <?php echo $user->facebook ?> </p>
                <p>Snapchat: <?php echo $user->snap ?></p>
                <p>Twitter: <?php echo $user->twitter ?></p>
                <p>Major: <?php echo $user->major ?> </p>
                <p>Graduation Year: <?php echo $user->year ?></p>
        <?php
            }
        endforeach; ?>

    </body>
</html>
=======
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
            foreach ($users as $user) {
                if ($user->uin == $uin) {
                    $SnaggedUser = $user;
                }
            }
            endforeach;?>

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
>>>>>>> before discard
