<?php
include_once('db_connect.php');
$database = new database();
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if ($database->register($username, $password, $nama)) {
        header('location:login.php');
    }
}

?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Register Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <style>

        .container {
            width: auto;
            max-width: 680px;
            padding-top: 50px;
            padding-left: 150px;
        }
    </style>
</head>

<body>
    <!-- Begin page content -->
        <div class="container mt-5">
            <h1 class="mt-5">Register Form</h1>
            <hr style="width:400px;" />
            <form method="post" action="">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                </div>
    </br>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                    </div>
                </div>
    </br>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
    </br>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <a href="login.php" class="btn btn-success">Sign In</a>
                        <button type="submit" class="btn btn-primary" name="register">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
</body>

</html>