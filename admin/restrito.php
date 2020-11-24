<?php

require_once 'admin.php';

if(!isLogged())
{
	removeVisitante();
}