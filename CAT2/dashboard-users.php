<?php session_start(); ?>
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
        <title>Dashboard - User Profile</title>
    </head>
    <body>
        <div class="container-fluid py-5 text-center">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center">
                    <div class="card">
                        <div class="card-body">
                            <i class="bi bi-person-circle mb-5" style="font-size: 100px; color: #0dcaf0;"></i>
                            <br>
                            <h1><?php echo htmlentities($_SESSION['first_name'], ENT_QUOTES, 'UTF-8'); ?> <?php echo htmlentities($_SESSION['last_name'], ENT_QUOTES, 'UTF-8'); ?></h1>
                            <p><b>@</b><?php echo htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <p><b>Email Address:</b> <?php echo htmlentities($_SESSION['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <p><b>Bio:</b> <?php echo htmlentities($_SESSION['bio'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <hr>
                            <form class="d-flex" role="search" method="POST" action="processes/logout_process.php">
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <a href="edit-profile.php?id=<?=$_SESSION['user_id']?>" class="btn btn-info">
                                        Update Profile
                                    </a>
                                    <button class="btn btn-danger" type="submit">Logout</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    </body>
</html>