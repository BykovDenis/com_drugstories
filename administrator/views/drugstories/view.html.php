<?php

defined('_JEXEC') or die("Restricted access");

// Подключаем библиотеку представления Joomla.
jimport('joomla.application.component.view');

class DrugstoriesViewDrugstories extends JViewLegacy{
    
    protected $items; 
    protected $pagination; 


    function display($tpl = null) {        
       
        JToolBarHelper::title("Component Справочная система аптек: Справочная система аптек ", "generic.png");
        JToolBarHelper::addNew("drugstories.add");
        JToolBarHelper::editList("drugstories.edit");
        JToolBarHelper::divider();
        JToolBarHelper::deleteList('','drugstories.remove'); 
        
        $model = $this->getModel();        
        
        $this->items = $model->getItems();
        $this->pagination = $model->getPagination();
                     
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
}
