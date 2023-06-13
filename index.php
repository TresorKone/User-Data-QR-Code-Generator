<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind CSS -->
    <title>User Data QR Code Generator</title>
</head>
<body class="font-mono">
    <div class="py-8 min-h-[20%] flex items-center justify-center">
        <img width="50" height="50" src="https://img.icons8.com/ios/50/qr-code--v1.png" alt="qr-code--v1"/>
        <p class="px-8">
            hello dear user.
            <br>
            This application goal is to generate a QR Code from the data entered through the fields below. have fun
        </p>
    </div>

    <div class="py-8 h-[70%] flex items-center justify-center">
        <div>
            <div class="hover:uppercase p-8">
               <h3>User Data QR Code Generator</h3>
            </div>
            <?php
            include "./input-picker.php"
            ?>
            <form action="index.php" method="post" class="form" autocomplete="off">
                <div class="py-4">
                    <label for="first_name">First name</label>
                    <div>
                        <input id="first_name" type="text" placeholder="<?php echo $first_name; ?>" name="first_name">
                    </div>
                </div>

                <div class="py-4">
                    <label for="last_name">Last name</label>
                    <div>
                        <input id="last_name" type="text" placeholder="<?php echo $last_name; ?>" name="last_name">
                    </div>
                </div>

                <div class="py-4">
                    <label for="email">Email</label>
                    <div>
                        <input id="email" type="email" placeholder="<?php echo $email; ?>" name="email">
                    </div>
                </div>

                <div class="py-4">
                    <label for="link">Link</label>
                    <div>
                        <input id="link" type="url" placeholder="<?php echo $link; ?>" name="link">
                    </div>
                </div>

                <div class="py-4 ring-offset-2 ring-2 ring-slate-600 w-1/2 rounded-md hover:bg-slate-950 hover:text-white">
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