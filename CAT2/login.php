<?php include('processes/db.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <title>Log In User</title>
    </head>
    <body>
        <div class="container py-5 text-center">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <i class="bi bi-people mb-5" style="font-size: 100px; color: #0dcaf0;"></i>
                            <h1><b>Log In</b></h1>
                            <p class="mb-5">Don't have an account? <a href="register.php" style="text-decoration: none;">Sign Up</a></p>
                            <form method="POST" action="processes/login_process.php">
                                <div class="mb-3">
                                  <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" required>
                                </div>
                                <div class="mb-3">
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-info btn-lg" type="submit">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    </body>
</html>