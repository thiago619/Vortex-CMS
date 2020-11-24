<?php

final class Users
{
	private static $instance;

	public static function getInstance()
	{
		if(is_null(self::$instance))
		{
			self::$instance = new Users();
		}
		return self::$instance;
	}


	private function __construct()
	{

	}

	private function __clone()
	{

	}

	private function __wakeup()
	{

	}

	public static function addUser($name, $pass)
	{
		SqlManager::getConnection()->query("INSERT INTO usuarios (usuario,senha) VALUES ('". $name ."', '". $pass ."')");
	}

	public static function removeUser($id)
	{
		SqlManager::getConnection()->query("DELETE FROM usuarios WHERE ID=".$id);
	}

	public static function getUserId($name,$pass)
	{
		$result = SqlManager::getConnection()->query("SELECT ID FROM usuarios WHERE usuario ='". $name ."' AND senha ='". $pass ."'");
		$temp=mysqli_fetch_assoc($result);
		return $temp['ID'];
	}

}