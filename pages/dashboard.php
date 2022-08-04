<?php

session_start();

if (isset($_SESSION['user_id']) && ($_SESSION['user_status'] == 1)) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SeaSide Lodge</title>

        <link href="../assets/fontawesome-free-6.1.2/css/all.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

        <script src="../assets/fontawesome-free-6.1.2/js/all.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <style>
            * {
                font-family: Garamond;
            }

            body {
                margin: 0;
                color: #503606;
            }

            .row {
                display: flex;
            }

            h1,
            h2,
            h3 {
                color: #855a09;
            }

            .active {
                background-color: #ffdfa3;
                color: #9c6806;
            }

            .float-right {
                float: right;
            }

            #navigation_bar {
                width: 100%;
                box-shadow: 0 4px 4px 0 #0000001a;
                position: fixed;
                overflow: hidden;
                background-image: linear-gradient(#ffffff, #ffffff);
            }

            .logo_tabs {
                float: left;
                text-align: center;
                color: #9c6806;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 10px;
                text-decoration: none;
                font-size: 20px;
            }

            .navbar_tabs {
                float: left;
                text-align: center;
                color: #9c6806;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 20px;
                padding-bottom: 20px;
                text-decoration: none;
                font-size: 20px;
            }

            .navbar_tabs:hover {
                background-image: linear-gradient(#fdd282, #ddaa4b);
                color: #543702;
                ;
            }

            .body_content {
                padding-top: 3rem;
                margin-bottom: 100px;
            }

            #hotel_intro_caption {

                padding-left: 100px;
                padding-right: 100px;
                text-align: center;
                font-size: 20px;
            }

            #footer {
                background-color: #fff3dc;
            }

            .quick_access {
                text-decoration: none;
                color: #15576b;
            }

            button {
                font-family: Garamond;
                background-image: linear-gradient(#fdd282, #ddaa4b);
                margin-right: -20px;
                padding-left: 35px;
                padding-right: 35px;
                border: none;
                width: 100%;
            }

            button:hover {
                background-image: linear-gradient(#ddaa4b, #fdd282);
            }

            .row {
                display: flex;
                padding: 10px;
            }
        </style>

    </head>

    <body>

        <div class="page-content" style="margin-top: 25px;">

            <div style="text-align: center;">
                <img src="../img/Logo.png" alt="Logo" style="width: 400px;" />
                <h2 style="margin-top: -10px;">INQUIRIES</h2>
            </div>

            <div class="row">
                
                <div style="width: 25%; padding: 10px;">
                </div>

                <div style="width: 25%; padding: 10px;">
                    <button type="button">
                        <h3><i class="fa-solid fa-arrow-rotate-right"></i>&nbsp;&nbsp;CHANGE PASSWORD</h3>
                    </button>
                </div>

                <div style="width: 25%; padding: 10px;">
                    <button type="button">
                        <h3><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;LOGOUT</h3>
                    </button>
                </div>

                <div style="width: 25%; padding: 10px;">
                </div>
            </div>

        </div>

    </body>

    </html>

<?php

} else {

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

        <div class="container" style="width: 50%; border: 5px solid #906014; text-align: center;">

            <img src="../img/Logo.png" alt="Logo" style="width: 100%; text-align: center;" />

            <br>

            <h1>LOGIN ERROR!</h1>

            <a href="../sign_in.php" style="text-decoration: none;">
                <button>Back to Login Page</button>
            </a>

        </div>

    </body>

    </html>

<?php
}
?>