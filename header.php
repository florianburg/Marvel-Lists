
<?php
require 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>marvel movies</title>
    <style>
        body{
            background: chocolate;
            text-align: center;
        }
        input{
            width: 150px;
        }
        label {
            width: 100px;
        }
        .links{
            display: flex;
            justify-content: space-evenly;
        }
        a{
            text-decoration: none   ;
            color: black;
        }
    </style>
</head>
<body>
<header>
    <img width="auto" height="250" src="https://1000logos.net/wp-content/uploads/2017/08/Marvel-Logo.png" alt="hi">
    <div class="links">
        <a href="chooseFilm.php">homepage</a>
    </div>
</header>