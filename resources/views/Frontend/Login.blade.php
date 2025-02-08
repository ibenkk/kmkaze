<!DOCTYPE html>
<html lang="en" id="body">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">


</head>

<body id="body">
    <div class="loginsection">
        <div class="login">
            <div class="login-title">
                <h2>Login</h2>
            </div>
            <div class="loginform">

                <form action="/login" class="form-login" method="POST">
                    @csrf
                    <label for="username">Gmail :

                    </label>
                    <input type="email" name="email" placeholder="Gmail">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password">
                    <div class="submit-form">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="js/landingpage/register.js"></script>
<script src="js/landingpage/slider.js"></script>

</html>
