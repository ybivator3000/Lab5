<html>
<head>
	<title>Update</title>
	<meta charset="utf-8">
	<script  src="newt_js.js"></script>
</head>
<body>
	<form action="vendor/edit.php" method="post" class="js-form">
	<input type="hidden" name="id" value="<?= $_GET['id']?>">
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
        <button type="submit"  class="js-submit">Update comment</button>

    </form>
</body>
</html>