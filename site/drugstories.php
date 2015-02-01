<?php

defined('_JEXEC') or die("Restricted access");

JLog::addLogger(
array('text_file' => 'com_drugstories.php'),
JLog::ALL,
array('com_drugstories')
);


if($controller = JRequest::getVar('controller')){

    require_once(JPATH_COMPONENT_ADMINISTRATOR."/controllers/".$controller.".php");
    $classnme = 'DrugstoriesController'.$controller;
    $controller = new $classname();
    
}
else {

    // Include dependencies
    jimport('joomla.application.component.controller');
    $controller = JControllerLegacy::getInstance('drugstories');
}

$controller->execute(JRequest::getCmd('task'));
$controller->redirect();