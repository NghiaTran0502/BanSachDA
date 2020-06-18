<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/site.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<?php
//session_start();
?>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Đăng nhập</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="usr">UserName:</label>
                    <input type="text" id="username" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" id="password" class="form-control" id="pwd">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="login" class="btn btn-primary">Đăng nhập</button>
            </div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-sm">
        <!-- Brand -->
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <?php
                if ($_SESSION["name"] != null) { ?>
                    <li class="nav-item dropdown" id="log">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                            <?php echo $_SESSION["name"] ?>
                        </a>
                        <div class="dropdown-menu">
                            <?php
                            if ($_SESSION["role"] == 1) { ?>
                                <a class="dropdown-item" href="../AdminSach/Show">Quản lý</a>
                            <?php }
                            ?>
                            <a class="dropdown-item" href="#">Hồ sơ</a>
                            <a class="dropdown-item" id="logout" href="#">Đăng xuất</a>

                        </div>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a id="login" data-toggle="modal" data-target="#myModal" class="nav-link">Đăng nhập</a>
                    </li>
                <?php } ?>

                <!-- Dropdown -->

            </ul>
        </div>
    </nav>
</header>

<body id="user">
    <div class="container boxBody">
        <?php
        require_once("./mvc/views/pages/" . $data["page"] . ".php");
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="../public/js/myjs.js"></script>
</body>

</html>