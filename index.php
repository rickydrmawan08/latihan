<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>siskampus</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="img/um.png" alt="" />
        </div>
        <div class="text-center mt-4 name">Universitas Mandiri</div>
        <form action="auth/auth.php" method="post" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userame" placeholder="Username" />
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" />
            </div>
            <input type="submit" value="log in" class="btn btn-primary">
        </form>
        <div class="text-center fs-6"><a href="#">Forget password?</a> or <a href="#">Sign up</a></div>
    </div>
</body>

</html>