<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/icon.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">E-Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Products"
                            aria-label="Search">
                        <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>

                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="">Electronics</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Mobile</a></li>
                                <li><a class="dropdown-item" href="#">mobile components</a></li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                        href="#">Computer</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Hardware</a></li>
                                        <li><a class="dropdown-item" href="#">Software</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu
                                        2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                    </ul>
                                </li>
                        </li>
                </li>
            </ul>
            </li>
            </ul>
            <?php if (isset($login) and $login == false) {

            ?>
            <li class="nav-item">
                <a class="nav-link" href="login">Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup">Sign Up</a>
            </li>
            <?php } elseif (isset($login) and $login == true) { ?>
            <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
            </li>
            <?php } ?>
            </ul>

            <span class="navbar-text d-none d-md-block">
                Shoping Cart
            </span>
        </div>
    </nav>