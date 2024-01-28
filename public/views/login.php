<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="public/css/style_login.css">

    <link rel="stylesheet" type="text/css" href="public/css/style_login.css">
<!--    <script type="text/javascript" src="./public/js/script.js" defer></script>-->
    <!--<script src="confirm_password.js"></script>  -->
    
    <title>Login Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form id="registration" method="post" action="register"  >
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <h1>Create Account</h1>
                
                <span>Use your email for registeration</span>
                <input name="name" type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="tel" placeholder="Mobile phone number">
                <input type="password" placeholder="Password" id="password" required>
                <input type="password" placeholder="Confirm Password" id="confirm_password" required>
        
                <button type="submit">Confirm</button>
                
            </form>
        </div>
        <div class="form-container sign-in">
            <form class="login" method="POST" action="login">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>

                <h1>Sign In</h1>
                <span>Use your email password</span>
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome, Friend!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/script_login.js"></script>
</body>

</html>