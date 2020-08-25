<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webdesignik587</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Mockup-iPhone-6.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    //ini script
    <div class="iphone-mockup"><img src="assets/img/iphone.svg" class="device">
        <div class="screen">
            <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
                <p class="profile-name-card"> </p>
                <form method="post" action="ceklogin.php" class="form-signin"><span class="reauth-email"> </span>
                    <input class="form-control" type="email" name="username" required="" placeholder="Email address" autofocus="" id="inputEmail">
                    <input class="form-control" type="password" name="password" required="" placeholder="Password" id="inputPassword">
                    <div class="checkbox">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Remember me</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
                </form><a href="#" class="forgot-password">Forgot your password?</a></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
