<?php

require_once 'config.php';


function loadvortex($admin = false)
{
	$teste = SqlManager::getInstance();
	$teste::connect();
	$url = (isset($_GET['url']))? $_GET['url'] : 'home';
	if(!$admin)
	{
		$cpm = CurrentPageManager::getInstance();
		$cpm::decodeUrl($url);
	}

	session_start();

}


function getHeader($admin = false)
{
	$path = TEMPLATE_PATH;
	if($admin)
	{
		$path .= '/header-admin.php';
	}else
	{
		$path .= '/header.php';
	}
	include_once($path);
}

function getFooter()
{
	$path = TEMPLATE_PATH;
	$path .= '/footer.php';
	include_once($path);
}

function thePage()
{
	$cpm = CurrentPageManager::getInstance();

	if($cpm::getPageType()== PAGE_TYPE_FILE)
	{
		include TEMPLATE_PATH .'/'. $cpm::getPageSlug();
	}else if($cpm::getPageType()== PAGE_TYPE_APP)
	{
		echo "app". $cpm::getPageSlug();
	}else if($cpm::getPageType()== PAGE_TYPE_NOTFOUND)
	{
		include TEMPLATE_PATH .'/404.php';
	}
}

function theTitle()
{
	$cpm = CurrentPageManager::getInstance();
	echo $cpm::getPageTitle();
}

function isLogged()
	{
	$usuario = (isset($_SESSION['usuario'])) ? $_SESSION['usuario'] : '';
	$senha = (isset($_SESSION['senha'])) ? $_SESSION['senha'] : '';
	$usermanager = Users::getInstance();


	$idusuario = $usermanager::getUserId($usuario,$senha);

	if(is_null($idusuario))
	{
		return false;
	}
	return true;
}

function removeVisitante()
{
	session_destroy();
	header('location:'. ADMIN_URL .'/login.php');
	die();
}