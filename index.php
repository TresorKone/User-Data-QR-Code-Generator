<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data QR Code Generator</title>
</head>
<body>

    <div>
        <div>
            <div>
               <h3>User Data QR Code Generator</h3>
            </div>
            <?php
            $first_name = "Enter your first name here";
            $last_name = "Enter your last name here";
            $email = "Enter your first email here";
            $link = "Enter here a link of your personal website or of your company";

            if (isset($_POST["submit-btn"])) {
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $link = $_POST["link"];

                echo "<pre>";
                var_dump($_POST);
                echo "</pre";
            }

            ?>
            <form action="index.php" method="post" class="form" autocomplete="off">
                <div>
                    <label for="first_name">First name</label>
                    <div>
                        <input id="first_name" type="text" value="<?php echo $first_name; ?>" name="first_name">
                    </div>
                </div>

                <div>
                    <label for="last_name">Last name</label>
                    <div>
                        <input id="last_name" type="text" value="<?php echo $last_name; ?>" name="last_name">
                    </div>
                </div>

                <div>
                    <label for="email">Email</label>
                    <div>
                        <input id="email" type="email" value="<?php echo $email; ?>" name="email">
                    </div>
                </div>

                <div>
                    <label for="link">Link</label>
                    <div>
                        <input id="link" type="url" value="<?php echo $link; ?>" name="link">
                    </div>
                </div>

                <div>
                    <label for="submit-btn"></label>
                    <div>
                        <input id="submit-btn" type="submit" value="Generate QR Code" name="submit-btn">
                    </div>
                </div>
            </form>
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

                echo "<img alt='qr' src='" . $PNG_TEMP_DIR . basename($filename) . "' /><hr/>";
            }
            ?>
        </div>
    </div>

</body>
</html>