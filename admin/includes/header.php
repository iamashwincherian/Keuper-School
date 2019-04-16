<?php include "includes/auth.php"; ?>
<?php ob_start() ?>
<?php session_start() ?>
<?php header('Cache-Control: no-cache, must-revalidate, max-age=0') ?>
<?php include "includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keuper School</title>

    <link rel="shortcut icon" type="image/x-icon" href="./lib/imgs/logo-new.png" />
    <link href="http://allfont.net/allfont.css?fonts=time-roman-bold" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="./admin.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138237477-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-138237477-1');
    </script>
    
</head>
<body>
