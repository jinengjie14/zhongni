<?php
require_once("BaseDao.php");
require_once("User.php");


class UserDao extends BaseDao {
	
	public function findByAccount($name) {
		$sth = $this->db->prepare("select * from tb_user where name=:name");
		$sth->bindValue(':name', $name, PDO::PARAM_STR);
		$sth->execute();
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		$user = new User($row['id'], $row['name'], $row['pwd']);
		return $user;
	}
	
	public function save($name, $pwd) {
		$sth = $this->db->prepare("insert into tb_user(name,pwd) values(:name,:pwd)");
		$sth->bindValue(':name', $name, PDO::PARAM_STR);
		$sth->bindValue(':pwd', $pwd, PDO::PARAM_STR);
		$sth->execute();
	}
	
	
	
}
//$uao=new UserDao();

?>