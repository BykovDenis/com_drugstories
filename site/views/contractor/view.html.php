<?php

defined('_JEXEC') or die("Restricted access");

// Подключаем библиотеку представления Joomla.
jimport('joomla.application.component.view');

class DrugstoriesViewContractor extends JViewLegacy{
    
    protected $items; 

    function display($tpl = null) {
        
        $this->items = $this->get("Items");
       
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
}
