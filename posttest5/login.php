<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <header>
        <h2 class="logo">Renaldi</h2>
        <nav class="navigation">
            <a href="index.html">Home</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <button class="btnlogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="dashboard.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="username" placeholder="Email" required autocomplete="off">
                    <label for="username"></label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" placeholder="password" required autocomplete="off">
                    <label for="password"></label>
                </div>
                <div class="ingat">
                    <label><input type="checkbox">
                        Simpan Password</label>
                    <a href="#">Lupa Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Buat akun baru? <a href="#" class="register-link">Daftar</a></p>
                </div>
            </form>
        </div>
        <div class="form-box register">
            <h2>Daftar</h2>
            <form action="dashboard.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="email" placeholder="Username" required>
                    <!-- <label>Username</label> -->
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" placeholder="Email" required>
                    <!-- <label>Email</label> -->
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" placeholder="Password" required>
                    <!-- <label>Password</label> -->
                </div>
                <div class="ingat">
                    <label><input type="checkbox">
                    simpan akun</label>
                </div>
                <button type="submit" class="btn">Buat Akun</button>
                <div class="login-register">
                    <p>sudah punya akun? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>




    <script src="scriptlogin.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>