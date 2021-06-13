<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginn.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Login</title>
</head>
<body>

<div class="container">
    <h4 class="text-center text-white">FORM LOGIN</h4>
    <hr>
    <form method="POST" action="cek_login.php">
        <div class="form-group text-white">
            <label>Username</label>

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" name="username"
                placeholder="username = customer / admin" required autofocus>
            </div>

            <label>Password</label>

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                </div>
                <input type="password" class="form-control" name="password" 
                placeholder="password = customer / admin">
            </div>

            <label>Sebagai</label>

            <div class="form-label-group">
                <select class="form-control" name="level">
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Login</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>

</body>
</html>