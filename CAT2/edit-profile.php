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
        <title>Edit Profile</title>
    </head>
    <body>
        <div class="container py-5 text-center">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <i class="bi bi-people mb-5" style="font-size: 100px; color: #0dcaf0;"></i>
                            <h1><b>Edit Your Profile</b></h1>
                            <form method="POST" action="processes/edit_profile_process.php">
                                <?php
                                    $eid=$_GET['id'];
                                    $ret=mysqli_query($conn,"select * from users where ID='$eid'");
                                    while ($row=mysqli_fetch_array($ret)) {
                                ?>
                                    <div class="row">
                                        <div class="mb-3" style="visibility: hidden;">
                                            <input type="text" name="id" class="form-control" value="<?php  echo $row['id'];?>" id="id" aria-describedby="emailHelp" placeholder="ID" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="username" class="form-control" value="<?php  echo $row['username'];?>" id="username" aria-describedby="emailHelp" placeholder="Username" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" name="first_name" class="form-control" value="<?php  echo $row['firstname'];?>" id="first_name" aria-describedby="emailHelp" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" name="last_name" class="form-control" value="<?php  echo $row['lastname'];?>" id="last_name" aria-describedby="emailHelp" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" value="<?php  echo $row['email'];?>" id="email" aria-describedby="emailHelp" placeholder="Email Address" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" value="<?php  echo $row['bio'];?>" id="bio" name="bio" placeholder="My Bio" required>
                                    </div>
                                    <?php 
                                }?>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-info btn-lg" type="submit">Save Changes</button>
                                    <a href="dashboard-users.php" class="btn btn-secondary">
                                        Back
                                    </a>
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