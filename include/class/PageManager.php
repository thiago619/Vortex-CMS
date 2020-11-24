<?php

final class PageManager
{
	private static $instance;


	private function __construct(){}
	private function __clone(){}
	private function __wakeup(){}

	public static function getInstance()
	{
		if(is_null(self::$instance))
		{
			self::$instance = new PageManager();
		}
		return self::$instance;
	}

	public static function getPagebyId($id){}

	public static function getPageBySlug($slug){}

	public static function addPage($page){}

	public static function deletePage($id){}

	public static function updatePage($id, $page){}

	public static function getAllPages(){}

}