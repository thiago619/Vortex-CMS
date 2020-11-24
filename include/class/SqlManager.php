<?php

final class SqlManager
{
	private static $sqlConnection;
	private static $instance = null;

	public static function getInstance()
	{
		if(is_null(self::$instance))
		{
			self::$instance = new SqlManager();
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

	public static function connect()
	{
		self::$sqlConnection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	}

	public static function getConnection()
	{
		return self::$sqlConnection;
	}

}