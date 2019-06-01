<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../layout/head.php'; ?>
    <title>Login</title>
</head>

<body id="main-login">
    <div class="header white">
        <div class="pure-g">
            <div class="pure-u-1">
                <a class="menu-private" href="http://fisica.fcyt.umss.edu.bo">Salir</a>
            </div>
        </div>
    </div>
    <div class="pure-g" id="form">
        <div class="pure-u-1-3"></div>
        <div class="pure-u-1-3" id="form-content">
            <h3 class="login-title">Login</h3>
            <form action="" class="pure-form pure-form-stacked">
                <div class="pure-u-1 input">
                    <input type="text" placeholder="Username" class="pure-input-1" required>
                </div>
                <div class="pure-u-1 input">
                    <input type="password" placeholder="Password" class="pure-input-1" required>
                </div>
                <div class="pure-u-1 input">
                    <button type="submit" class="pure-button pure-button-primary">Ingresar</button>
                </div>
            </form>
        </div>
        <div class="pure-u-1-3"></div>
    </div>
</body>

</html>