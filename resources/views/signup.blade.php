<!DOCTYPE html>
<html lang="en">

<head>
    <meta charsett="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Bako | Login / Daftar </title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form" method="POST">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="email" value=""
                            required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" id="myPassword" required>
                    </div>
                    <input type="submit" value="Login" name="login" class="btn solid">

                </form>

                <form action="" class="sign-up-form" method="post">
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="daftar_email"
                            value="" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="daftar_username"
                            value="" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="daftar_password"
                            value="" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Re Type Password" name="daftar_cpassword"
                            value="" required />
                    </div>
                    <input type="submit" value="Daftar" class="btn solid" name="daftar">

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum punya akun?</h3>
                    <p>Buat dulu yuk akun kamu untuk bisa berbelanja sembako di E-Bako <br>
                        ga akan lama kok!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Daftar</button>
                </div>

                <img src="../img/login.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah punya akun?</h3>
                    <p> Ayo login ke akunmu dan mulai berbelanja sembako di E-Bako. <br>
                        sat-set-sat-set ga pake lama!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>

                <img src="../img/gbr1.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="js/signup.js"></script>
</body>

</html>