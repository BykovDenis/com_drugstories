<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.controlleradmin');


class DrugstoriesControllerContractor extends JControllerAdmin {
    
       
    public function getModel($name = 'Contractor', $prefix = 'DrugstoriesModel', $config = array('ignore_request'=> true)) {       
        
        $model = parent::getModel($name, $prefix, $config);        
        return $model;
        
    }
    
}

