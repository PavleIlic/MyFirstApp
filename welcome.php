<?php
session_start();
if (!$_SESSION['is_logged']) {
    header('Location: login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Dobrodosli</title>
</head>
<body>
<h1>Uspeo sam Coske</h1>
<a href="logout.php">Logout</a>
</body>
</html>
