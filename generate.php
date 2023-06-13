<?php

include "./phpqrcode/qrlib.php";
$PNG_TEMP_DIR = "temp/";

if (!file_exists($PNG_TEMP_DIR)) {
    mkdir($PNG_TEMP_DIR);
}

$filename = $PNG_TEMP_DIR . 'try.png';

if (isset($_POST["submit-btn"])) {
    $codeString = $_POST["first_name"] . "\n";
    $codeString .= $_POST["last_name"] . "\n";
    $codeString .= $_POST["email"] . "\n";
    $codeString .= $_POST["link"] . "\n";

    $filename = $PNG_TEMP_DIR . "try" . md5($codeString) . ".png";

    QRcode::png($codeString, $filename);

    echo "<img class='p-8' alt='qr' src='" . $PNG_TEMP_DIR . basename($filename) . "' /><hr/>";
}
