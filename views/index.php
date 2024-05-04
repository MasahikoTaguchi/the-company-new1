<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Company | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title h3 text-center">Login</h1>
            </div>
            <div class="card-body">
                <form action="../actions/login.php" method="post">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control mb-3" id="username" name="username" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" required>
                    <input type="submit" value="Login" class="btn btn-primary w-100" name="btn_login">
                </form>
            </div>
            <div class="card-footer">
                <p class="text-muted text-center">No account yet? <a href="register.php">register</a>here</p>
            </div>
        </div>
    </div>
</body>
</html>