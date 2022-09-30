<?php

session_start();

$_SESSION['nama'] = "Radhea Nugroho Jati";

$_SESSION['absen'] = 19;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan Session</title>
</head>
<body>
    <?php
    echo "Nama saya" . $_SESSION['nama'] . "<br>". "Nomor absen". $_SESSION['absen'];
    ?>
    </body>
    </html>