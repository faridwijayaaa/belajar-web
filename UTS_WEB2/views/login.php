<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login From</title>
    <link rel="stylesheet" href="./css/regisStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="left bar">
            <img src="./img/images.png" alt="Ilustration image for registration">
            <h3>Let's start your journey</h3>
        </div>
        <div class="right bar">
            <h1>Get's started.</h1>
            <p style="margin-top: -2.5vh">Don't have an account yet? <a href="./regis.php" class="sign-in">Register</a>
            </p>

            <form action="../controllers/cekLogin.php" method="POST">
                <div class="input-content">
                    <label for="name">
                        <p>Username</p>
                    </label>
                    <input type="text" name="username" class="btn input" placeholder="Username">
                </div>
                <div class="input-content">
                    <label for="password">
                        <p>Password</p>
                    </label>
                    <input type="password" name="password" id="password" onkeyup="check();" class="btn input"
                        placeholder="*******">
                </div>
                <span id="msg"></span>
                <button type="submit" class="btn submit">Login</button>
            </form>
        </div>
    </section>

    <!-- <script src=" ../views/js/script.js" type="text/Javascript"></script> -->
</body>

</html>