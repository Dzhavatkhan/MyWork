<pre>
    <? print_r($_POST); ?>
</pre>

<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=bookshop', 'root', 'root');

$sql = "SELECT * FROM users WHERE login=:login";
$statement = $pdo->prepare($sql);
$statement->execute(['login' => $login]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if(empty($user)) {
    $_SESSION['error'] = "Неверный логин или пароль";
    header("Location: /auto.php");
    exit;
}

if($password != $user['password']) {
    $_SESSION['error'] = "Неверный логин или пароль";
    header("Location: /auto.php");
    exit;    
}

$_SESSION['user'] = ["login" => $user['login'], "id" => $user['id']];
header("Location: /send/index.php");
exit;