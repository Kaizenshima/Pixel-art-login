<!DOCTYPE html>
<html>
<head>
    <title>Test Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="login-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Login Here</h2>
                <form action="login_conn.php" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <a href="register.php">Sign Up</a><br><br>
                    <button type="submit" class="btn btn-primary" >Login</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
