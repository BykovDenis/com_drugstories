<?php

defined('_JEXEC') or die("Restricted access");

// Подключаем библиотеку представления Joomla.
jimport('joomla.application.component.view');

class DrugstoriesViewDrugstories extends JViewLegacy{
    
    protected $items; 
    protected $pagination; 

    function display($tpl = null) {
        
        $model = $this->getModel();   
        
        $this->items = $model->getItems();
        $this->pagination = $model->getPagination();
       
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
}
