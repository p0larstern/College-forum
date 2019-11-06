<?php
include_once('fix_mysql.inc.php');

require_once("sql_con.php"); 
ob_start(); 
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!--
        *Uncomment to make webpage responsive but some elements would show unexpected behaviour in small screens.
        <meta name="viewport" content="width=device-width, initial-scale=1">
    -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="skeleton.css" />
    <link rel="stylesheet" href="personal.css" />
    <title>College Forum</title>
</head>
<body>
    <div class="section hero">
        <div class="container">
            <div class="value-props row">
                <div class="four columns value-prop u-pull-left" id="headerFour">
                    <div class="row">
                            <div class="one-half column">
                                <img class="value-img" id="icon" src="icon.png">
                            </div></div>
                            <div class="row">
                            <div class="one-half column">
                                <h5 class="value-heading" id="brandText">clg-forum</h5>
                            </div>
                    </div>
                </div>
                <div class="row">
                <table class="u-full-width">
                    <thead>
                        <!-- <tr> -->
                           <th class="two columns"><a href="uhome.php" >Home</a></th>
                            <th class="two columns"><a href="forum.php">Forum</a></th>
                            <th class="two columns"><a href="messages.php">Message</a></th>
                        <!-- </tr> -->
                    </thead></table>
