<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --pink: #fb32a4;
            --neon-pink: #ff00ff;
        }

        body {
            font-family: sans-serif;
            background-image: url("bc2.png");
            background-repeat: no-repeat;
            background-size: 200%;
            background-position: center;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 40px;
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        .login-box form input[type="submit"] {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .login-box form input[type="submit"]:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
        }

        /* Styles for Navbar */
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            background-color: transparent;
            color: #fff;

        }

        .navbar .logo {
            font-size: 50px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .navbar .logout-btn {
            background-color: #03e9f4;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Style untuk alert */
        .alert {
            color: #ff0000;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a class="logo">PENDAFTARAN ASISTEN PRAKTIKUM</a>
    </nav>
    <div class="login-box">
        <h2>Login</h2>
        <?php if (session()->getFlashdata('salah')): ?>
            <div class="alert">
                <?= session()->getFlashdata('salah'); ?>
            </div>
        <?php endif; ?>
        <br>

        <form method="post" action="/asisten/cekLogin">
            <?= csrf_field() ?>
            <div class="user-box">
                <input class="form-control" id="username" name="username" type="text" placeholder="" required />
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input class="form-control" id="password" name="password" type="password" placeholder="" required />
                <label for="password">Password</label>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>
