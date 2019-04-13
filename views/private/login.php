<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../layout/head.php'; ?>
    <title>Login</title>
</head>
<body>
    <div class="header">
        <div class="pure-g">
            <div class="pure-u-1">
                <a class="menu-private" href="">Back</a>
            </div>
        </div>
    </div>
    <div class="pure-g" id="form">
        <div class="pure-u-1-3"></div>
        <div class="pure-u-1-3" id="form-content">
            <h3 style="text-align:center; color: #003770;">Login</h3>
            <form action="" class="pure-form pure-form-aligned">
                <div class="pure-control-group">
                    <input id="name" type="text" placeholder="Username" class="pure-input-1" required>
                </div>
                <div class="pure-control-group">
                    <input id="password" type="password" placeholder="Password" class="pure-input-1" required>
                </div>
                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Check</button>
                </div>
            </form>
        </div>
        <div class="pure-u-1-3"></div>
    </div>
</body>
</html>