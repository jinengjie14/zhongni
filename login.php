<?php
require_once("UserDao.php");

$dao = new UserDao();
$user = $dao->findByAccount($_POST['users']);
if ($user->getId() != "") {
	if ($user->getPwd() == $_POST['password']) {
		echo "success";
	} else {
		echo "passwd_is_error";
		
	}
} else {
	echo "account_is_not_exist";
}
?>