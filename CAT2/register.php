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
        <title>Register User</title>
    </head>
    <body>
        <div class="container py-5 text-center">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <i class="bi bi-people mb-5" style="font-size: 100px; color: #0dcaf0;"></i>
                            <h1><b>Sign Up</b></h1>
                            <p class="mb-5">Have an account? <a href="login.php" style="text-decoration: none;">Log In</a></p>
                            <form method="POST" action="processes/register_process.php">
                                <div class="row">
                                    <div class="mb-3">
                                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input type="text" name="last_name" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>    
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address" required>
                                </div>
                                <div class="mb-3">
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-info btn-lg" type="submit">Sign Up</button>
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