<?php
error_reporting(-1);
session_start();
if(!isset($_COOKIE['access'])){
    setcookie('access', 0);
}
if(!isset($_SESSION['access']))
    $_SESSION['access'] = 0;
ini_set('display_errors','On');
header("Content-Type: text/html; charset=utf-8");
$password =  password_hash('123', PASSWORD_DEFAULT);
if(isset($_POST['login'],$_POST['password']) && ( $_POST['login'] == 'admin' && password_verify($_POST['password'], $password))){
    $_SESSION['access'] = 1;
    header('Location: http://localhost/mysite/enter.php');
}
 if(isset($_POST['exit'])&& $_POST['exit']=='EXIT') {
    $_SESSION['access'] = 0;
    header('Location: http://localhost/mysite/enter.php');
}
$access = $_SESSION['access'];
?>
<html>
<head>
    <title>Сайт фотомастерской</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <img src="img/BrandName.png" class="icon">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto left_align">
                <li class="nav-item">
                    <a class="nav-link nav_item" href="index.html">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item nav_item">
                    <a class="nav-link " href="services.html">Услуги</a>
                </li>
                <li class="nav-item nav_item ">
                    <a class="nav-link" href="stuff.html">Сотрудники</a>
                </li>
                <li class="nav-item nav_item">
                    <a class="nav-link" href="test.php">Отзывы</a>
                </li>
                <li class="nav-item nav_item active">
                    <?php if(!$access) { ?>
                    <a class="nav-link" href="enter.php">Вход</a>
                    <?php } else { ?>
                    <a class="nav-link" href="enter.php">Выход</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main role="main">
    <?php
     if($access) { 
        if($_COOKIE['access']) {?>
        <h1 align = "center" style="font-size: 200%; font-weight: bolder;" >Админского здоровица вам</h1>
        <h1 align = "center" style="font-size: 100%; font-weight: bolder;" >С возвращением!</h1>
        <div align = "center">
            <form align = "center" method="post">
                <p><input type ="submit" name="exit" value="EXIT"></p>
            </form>
        </div>
    <div class="card-deck" style="margin-top: 50px" style="font-size: 200%; font-weight: bold">
        <div class="card">
            <img src="img/designer.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 200%;">Калачаров Николай Сергеевич</h5>
                <p class="card-text" style="font-size: 200%;">Дизайнер</p>
            </div>
        </div>
        <div class="card">
            <img src="img/backend.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 200%;">Саютин Леонид Алексеевич</h5>
                <p class="card-text" style="font-size: 200%;">Колхозный верстальщик</p>

            </div>
        </div>
        <div class="card">
            <img src="img/all.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 200%;">Каласютин Леконид Алегрович </h5>
                <p class="card-text" style="font-size: 200%;">Все остальное</p>
            </div>
        </div>
    </div>
    <?php } else { 
        setcookie('access', 1);
    ?>
    <h1 align = "center" style="font-size: 200%; font-weight: bolder;" >Админского здоровица вам</h1>
        <div align = "center">
            <form align = "center" method="post">
                <p><input type ="submit" name="exit" value="EXIT"></p>
            </form>
        </div>
    <div class="card-deck" style="margin-top: 50px" style="font-size: 200%; font-weight: bold">
        <div class="card">
            <img src="img/designer.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 200%;">Калачаров Николай Сергеевич</h5>
                <p class="card-text" style="font-size: 200%;">Дизайнер</p>
            </div>
        </div>
        <div class="card">
            <img src="img/backend.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 200%;">Саютин Леонид Алексеевич</h5>
                <p class="card-text" style="font-size: 200%;">Колхозный верстальщик</p>

            </div>
        </div>
        <div class="card">
            <img src="img/all.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 200%;">Каласютин Леконид Алегрович </h5>
                <p class="card-text" style="font-size: 200%;">Все остальное</p>
            </div>
        </div>
    </div>
<?php }} else { ?>
        <div class="container" align="center">
            <?php if(isset($_POST['login'], $_POST['password']) && ($_POST['login'] != 'admin' || $_POST['password'] != '123')){ ?>
                <p style="color: #ff0000">ERROR</p>
           <?php }
           ?>
            <form action="" method="post">
               <p><input type="text" name="login" placeholder="Введите логин"></p>
                <p><input type="password" name="password" placeholder="введите пароль"></p>
                <p><input type="submit" value="Войти на сайт!"></p>
            </form>
        </div>
<?php } 
?>
</main>
</body>
</html>