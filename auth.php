<?php
require_once("UserDao.php");

$dao = new UserDao();
$dao->save($_POST['rg_users'],$_POST['rg_pwd']);

?>