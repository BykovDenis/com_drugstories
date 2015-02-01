<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.controlleradmin');


class DrugstoriesControllerDrugstories extends JControllerAdmin {
    
       
    public function getModel($name = 'Drugstore', $prefix = 'DrugstoriesModel', $config = array('ignore_request'=> true)) {
        
        $model = parent::getModel($name, $prefix, $config);        
        return $model;
        
    }
    
}

