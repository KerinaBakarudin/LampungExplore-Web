<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lampung Explore</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #000;
            color: #fff;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            box-sizing: border-box;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: orange;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 10px;
            white-space: nowrap;
            transition: background-color 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            color: orange;
            border-bottom: 2px solid orange;
        }

        nav ul li a.active {
            border-bottom: 2px solid orange;
        }

        .login {
            position: relative;
            height: 100vh;
            background-image: url(gambar/siger2.png);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .login-content {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: left;
            box-sizing: border-box;
        }

        .login-content h4 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .input-box {
            margin-bottom: 20px;
            position: relative;
        }

        .input-box label {
            color: #333;
            width: 100%;
        }

        .input-box i {
            position: absolute;
            margin-top: 11px;
            left: 10px;
            color: rgb(249, 147, 164);
        }

        .input-box input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .create-acc {
            text-align: center;
            margin-top: 20px;
        }

        .create-acc input {
            background-color: orange;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .create-acc input:hover {
            background-color: #ff9900;
        }

        .buat-akun {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .buat-akun:hover {
            color: orange;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Lampung Explore</div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Destination</a></li>
            <li><a href="#">Rating and Review</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="login.php" class="active">Login</a></li>
        </ul>
    </nav>
</header>

<section class="login">
    <div class="login-content">
        <h4>Register Your Account</h4>
        <form action="conn/register.php" method="POST">
            <div class="input-box">
                <label>Your Name</label> <br>
                <i class="fa-solid fa-user" style="color: orange"></i>
                <input type="text" name="name" placeholder="Name" required>
            </div>

            <div class="input-box">
                <label>Phone Number</label> <br>
                <i class="fa fa-phone" style="color: orange"></i>
                <input type="text" name="phone_number" placeholder="Number" required>
            </div>

            <div class="input-box">
                <label>Create Username</label> <br>
                <i class="fa fa-user-plus" style="color: orange"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-box">
                <label>Create Password</label> <br>
                <i class="fa-solid fa-key" style="color: orange"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="create-acc">
                <input type="submit" name="create-acc" value="Create Account">
            </div>
        </form>
    </div>
</section>

</body>
</html>






