<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration From</title>
    <link rel="stylesheet" href="./css/regisStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="left bar">
            <img src="./img/images.png" alt="Ilustration image for registration">
            <h3>Let's registration and start your journey</h3>
        </div>
        <div class="right bar">
            <h1>Get's started.</h1>
            <p style="margin-top: -2.5vh">Already have an account? <a href="./login.php" class="sign-in">Log in</a></p>
            <!-- <a href="#" class="btn-ggl">
                <div class="btn">
                    <img src="img/google.png" class="fa">Sign up with Google
                </div>
            </a>
            <center><p>or</p></center> -->

            <form action="../controllers/createAkun.php" method="POST">
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
                    <label for="confirmPw">
                        <p>Confirm Password</p>
                    </label>
                    <input type="password" name="confirmPw" id="confirmPw" onkeyup="checkMatch();" class="btn input"
                        placeholder="*******">
                </div>
                <span id="msg"></span>
                <button id='btnSubmit' type="submit" class="btn submit" onclick="">Register</button>
            </form>
        </div>
    </section>

    <!-- <script src=" ./js/script.js" type=" text/Javascript"></script> -->
    <script src="./js/script.js"></script>
</body>

</html>