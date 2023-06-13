<?php

$first_name = "Enter your first name here";
$last_name = "Enter your last name here";
$email = "Enter your first email here";
$link = "Enter a link here";

if (isset($_POST["submit-btn"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $link = $_POST["link"];

    echo "<pre>";
    //var_dump($_POST);
    echo "</pre";
}