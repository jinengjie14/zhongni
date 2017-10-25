<?php

class User
{

    private $id;

    private $name;

    private $pwd;

    public function __construct($id, $name, $pwd){
		$this->id = $id;
		$this->name = $name;
		$this->pwd = $pwd;
	}
	
	

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPwd()
    {
        return $this->pwd;
    }

    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

?>