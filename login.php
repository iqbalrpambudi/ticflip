<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <!-- Icons -->
    <script src="./fontawesome/js/all.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top" style="box-shadow: 0 3px 6px rgba(0,0,0,0.2);">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <h2 class="text-dark">TicFlip</h2>
            </a>

            <!-- Button -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navigation -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-home mr-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-box mr-2"></i>Paket
                            Tour</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-ticket-alt mr-2"></i>Tiket</a>
                    </li>

                </ul>
                <div class="nav-item ml-3">
                    <a href="#"><button type="button" class="btn btn-info">Login</button></a>
                    <a href="#"><button type="button" class="btn btn-info">Register</button></a>
                </div>
            </div>
        </div>
    </nav>



    <!-- Jumbotron -->
    <div class="jumbotron" style="margin-top:50px;
        margin-bottom:0;
            height: 500px;
            background-image: url('./assets/hero.jpg');
            background-position:center;
            background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-4" style="box-shadow: 0 3px 6px rgba(0,0,0,0.2);">
                        <form action="user.php" method="POST">
                            <div class=" form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Don't have account? <a href="register.html">Register
                                        now</a></small>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <?php session_start();
                    if (isset($_SESSION['message'])) { ?>
                        <span class="alert alert-danger">
                            <?php echo $_SESSION['message'];
                                unset($_SESSION['message']); ?>
                        </span>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid bg-dark text-light">
        <div class="container p-3">
            <p class="my-auto text-left">©2019 TicFlip | All Rights Reserverd</p>
        </div>
    </div>

    <!-- Script -->
    <script src="./popper/popper.min.js"></script>
    <script src="./jquery/jquery.min.js""></script>
    <script src=" ./bootstrap/js/bootstrap.min.js"> </script> </body> </html>