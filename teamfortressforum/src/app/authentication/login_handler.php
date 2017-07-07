<?php
session_start();
require '../database/database.php';
require '../helpers/helper_functions.php';


//1. Controleren of we via een POST-request hier zijn aangekomen
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ' . url('teamfortressforum/src/app/authentication/login.php'));
    exit(0);
}
//2. formulier data binnenhalen
$username = $_POST ['username'];
$password = sha1($_POST['password']);


//3. Database connectie maken FAIL> Terug naar formulier
if(!dbConnect()) {
    header('Location: ' . url('teamfortressforum/src/app/authentication/login.php'));
    exit(0);
}


//4. SQL-query opstellen en uitvoeren, en daarna bij SUCCES gegevens van de user binnenhalen
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
dbQuery($sql, [ ':username' => $username, ':password' => $password]);
$user = dbGetRow();


//5. SUCCES
//a)Vastleggen voor andere PHP-bestanden dat iemand is ingelogd username en id
//b)doorlinken naar dashboard

if(!empty($user)) {
	//succesvol ingelogd
	$_SESSION['user_id'] = $user['id'];
	$_SESSION['username'] = $user['username'];


	//vastleggen
	//doorlinken


    header('Location: ' . url('teamfortressforum/src/index.php'));
    exit(0);

}else {
    header('Location: ' . url('teamfortressforum/src/app/authentication/login.php'));
}

