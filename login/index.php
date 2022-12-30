<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sqowey - Login</title>
    <link rel="icon" type="image/x-icon" href="/res/img/favicon.ico" />
    <link rel="apple-touch-icon" href="/res/img/favicon.ico" />
    <link rel="stylesheet" href="/res/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/res/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="/res/css/fonts.css">
    <link rel="stylesheet" href="/res/css/main.css">
    <link rel="stylesheet" href="/res/css/login.css">
</head>

<body>
    <main>
        <div class="title_container">
            <span id="welcome_title">Willkommen zurück!</span>
        </div>
        <div class="form_container">
            <form action="./login.php<?php if(isset($_GET["redirect"])) echo("?redirect=".urlencode($_GET["redirect"]))?>" method="post" id="login_formular">
                <div class="input_container">
                    <p>E-Mail oder Benutzername</p>
                    <input id="username_input" class="input" type="text" name="username" required>
                </div>
                <div class="input_container">
                    <p>Passwort</p>
                    <input id="password_input" class="input" type="password" name="password" required>
                </div>
                <div class="passwordReset_container">
                    <p class="password_reset" onclick="location.assign('/password/reset/');">Passwort zurücksetzen</p>
                </div>
            </form>
        </div>
        <div class="submit_button">
            <button id="submit_button" class="button" type="submit" onclick='document.getElementById("login_formular").submit();'>Login</button>
        </div>
    </main>
    <script src="/res/js/jquery/jquery-3.6.1.min.js"></script>
    <script src="/res/js/blockLoginForm.js"></script>
</body>

</html>