<?php

if(isset($_SESSION['logged']) && ($_SESSION['logged'] == true)){
    header("Location: login");
    exit();
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register page</title>

        <link rel="stylesheet" type="text/css" href="public/css/style_login.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="over-conteriner">
        <div class="container">
<!--            <div class="logo">-->
<!--                <img id="logoDesktop" src="public/img/logo.svg">-->
<!--                <img id="logoMoblie" src="public/img/mobileLogo.svg">-->
<!--            </div>-->

            <div class="login-container">
                <form action="register" method="POST">
                    <input name="name" type="text" placeholder="Name">
                    <input name="email" type="text" placeholder="Email">
                    <input name="password" type="password" placeholder="Password">
                    <input type="tel" name="phonenumber" placeholder="Mobile phone number">



                    <?php if (isset($messages)){
                        foreach ($messages as $message){
                            echo '<span style="color: red;">' . $message . '</span>';
                        }
                    }
                    ?>
                    <button type="submit">REGISTER</button>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>

<?php ?>