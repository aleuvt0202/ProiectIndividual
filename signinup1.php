<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="loginOK.css"> 
         
    <title>Login</title>
</head>
<body>
    <div class="alerta">
            <?php 
                session_start();
                if(isset($_SESSION["mesaj"])) echo $_SESSION["mesaj"];
                unset($_SESSION["mesaj"]);
                session_destroy();
            ?>
    </div>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Bine ai venit!</span><br>
                <span class="title">Pentru vizualizarea site-ului introduceti username-ul si parola.</span>

                <form action="login.php" method="post">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Introdu username-ul" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Introdu parola" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>


                    <div class="input-field button">
                        <button class="cart-btn" type="logare" name="logare" value="logare">Logare</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="loginOK.js"></script>
    <script src="logare.js"></script>

</body>
</html>
