<?php
require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Сайт фотомастерской</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src = "newt_js.js"></script>
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
                    <a class="nav-link" href="enter.php">Вход</a>

                </li>
            </ul>
        </div>
    </nav>
</header>
<main role="main">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Товар</th>
            <th scope="col">Покупатель</th>
            <th scope="col">Комментарий</th>
	    <th scope="col">Дата</th>
            <th scope="col"></th>
	    <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            <?php
            $products = $mysqli->query("SELECT * FROM `CRUD` ") or die("Ошибка");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product){
                ?>
                <tr>
                    <th scope="row"><?= $product[0]?></th>
                    <td><?= $product[1]?></td>
                    <td><?= $product[2]?></td>
                    <td><?= $product[3]?></td>
                    <td><?= $product[4]?></td>
		    <td><a href="update.php?id=<?= $product[0]?>">Update</a></td>
		    <td><a href="vendor/delete.php?id=<?= $product[0]?>">Delete</a></td>
                </tr>
        <?php } ?>
        </tbody>
      </table>
    <form action="vendor/create.php" method="post" class="js-form">
	<input type="hidden" name="id" value="<?= $product[0]?>">
        <p>Productname</p>
        <input type="text" name="productname"  class="js-productname field">
        <p>Username</p>
        <input type="text" name="username"  class="js-username field">
        <p>comment</p>
        <textarea name="comment" value = ""  class="js-comment field"></textarea>
        <p>Date </p>
        <input type="date" name = "date" value="" name="date" class="js-date field">
	<script>
	var new_date = new Date()
	var current_new_date = new_date.toISOString().slice(0, 10)
	document.querySelector('.js-date').value = current_new_date
	</script>
        <br>
        <br>
        <button type="submit"  class="js-submit">Add comment</button>

    </form>
	
</main>
</body>
</html>