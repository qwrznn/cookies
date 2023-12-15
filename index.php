<?php
$link = "";
//setcookie("user", "Jonh", time() + 3600);
if (isset($_POST['submit'])) {
    $login = $_POST["login"];
    $email = $_POST["email"];
    $time = date("d F Y h:i:s A") ."\n";;
    setcookie("login", $login, time() + 3600);
    setcookie("email", $email, time() + 3600);
    setcookie("time", $time, time() + 3600);
}

if (isset($_COOKIE['order'])) {
  foreach ($_COOKIE['order'] as $name => $value) {
    echo "$name : $value <br />";
  }
}

if (isset($_COOKIE['order'])) {
  foreach ($_COOKIE['order'] as $name => $value) {
    echo "$name : $value <br />";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

if (isset($_COOKIE["login"])) {
    echo '<a href="user.php">' . "User info: " . $_COOKIE["login"] . '.</a>';
}
?>

    <h1>Hello</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" placeholder="Input your login" name="login">
        <input type="email" placeholder="Input your email" name="email">
        <button type="submit" name="submit">Ok</button>
    </form>
</body>

</html>