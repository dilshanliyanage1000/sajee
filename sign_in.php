<?php

include_once('functions/authentication.php');

if (isset($_POST['username'])) {
?>

    <div class="container" style="width: 50%;">
        <div style="width: 100%; background-color: #f44336; color: white; padding: 10px;">
            <?php
            $result = AuthenticateUser($_POST['username'], $_POST['password']);
            echo $result;
            ?>
        </div>
    </div>

<?php
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SeaSide Lodge</title>

    <style>
        body {
            margin: 0;
            font-family: Garamond;
            color: #503606;
        }

        input[type=text],
        input[type=password] {
            font-family: Garamond;
            font-size: 18px;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #906014;
            box-sizing: border-box;
        }

        button {
            font-family: Garamond;
            font-size: 18px;
            background-color: #906014;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }
    </style>
</head>

<body style="margin-left: 30%; margin-top: 5%;">

    <div class="container" style="width: 50%; border: 5px solid #906014;">

        <form action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="POST">

            <img src="img/Logo.png" alt="Logo" style="width: 100%; text-align: center;" />

            <br>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <button type="submit">Login</button>

        </form>

    </div>

</body>

</html>