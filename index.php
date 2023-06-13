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
            include "./input-picker.php"
            ?>
            <form action="index.php" method="post" class="form" autocomplete="off">
                <div>
                    <label for="first_name">First name</label>
                    <div>
                        <input id="first_name" type="text" placeholder="<?php echo $first_name; ?>" name="first_name">
                    </div>
                </div>

                <div>
                    <label for="last_name">Last name</label>
                    <div>
                        <input id="last_name" type="text" placeholder="<?php echo $last_name; ?>" name="last_name">
                    </div>
                </div>

                <div>
                    <label for="email">Email</label>
                    <div>
                        <input id="email" type="email" placeholder="<?php echo $email; ?>" name="email">
                    </div>
                </div>

                <div>
                    <label for="link">Link</label>
                    <div>
                        <input id="link" type="url" placeholder="<?php echo $link; ?>" name="link">
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
            include "./generate.php"
            ?>
        </div>
    </div>

</body>
</html>