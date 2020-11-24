<?php
final class CurrentPageManager
{
	private static $instance;

	private static $title;
	private static $type;
	private static $slug;


	private function __construct(){}
	private function __clone(){}
	private function __wakeup(){}

	public static function getInstance()
	{
		if(is_null(self::$instance))
		{
			self::$instance = new CurrentPageManager();
		}
		return self::$instance;
	}

	public static function decodeUrl($url)
	{
		$url_array = explode('/', $url);
		$array_size = count($url_array);
		if($array_size>2)
		{
			self::$type = PAGE_TYPE_NOTFOUND;
			self::$title = 'Página não encontrada';
			self::$slug = $url_array[$array_size - 1];
		}else if($array_size==2)
		{
			if($url_array[0]=='app')
			{
				self::$type = PAGE_TYPE_APP;
				self::$title = 'Aplicativo';
				self::$slug = $url_array[1];
			}else
			{
				self::$type = PAGE_TYPE_NOTFOUND;
				self::$title = 'Página não encontrada';
				self::$slug = $url_array[$array_size - 1];
			}

		}else if($array_size==1)
		{
			$page = $url_array[0] .'.php';
			if(is_file(TEMPLATE_PATH .'/'. $page))
			{
				self::$type = PAGE_TYPE_FILE;
				self::$title = $url_array[0];
				self::$slug = $page;
			}else
			{
				self::$type = PAGE_TYPE_NOTFOUND;
				self::$title = 'Página não encontrada';
				self::$slug = $page;
			}
		}
	}

	public static function getPageType()
	{
		return self::$type;
	}

	public static function getPageSlug()
	{
		return self::$slug;
	}

	public static function getPageTitle()
	{
		return self::$title;
	}
}