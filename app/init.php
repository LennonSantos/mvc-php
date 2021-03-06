<?php

namespace app;

use mvc\init\Bootstrap; 

class Init extends Bootstrap
{
	protected function initRoutes()
	{
		$ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
		$ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
		$this->setRoutes($ar);
	}
}