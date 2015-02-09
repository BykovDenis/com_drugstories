<?php

defined('_JEXEC') or die("Restricted access");

// Подключаем библиотеку представления Joomla.
jimport('joomla.application.component.view');

class DrugstoriesViewContractor extends JViewLegacy{
    
    protected $items; 
    protected $pagination;

    function display($tpl = null) {
        
        $this->items = $this->get("Items");
        $this->pagination = $this->get("Pagination");
        JToolBarHelper::title("Component Справочная система аптек: Справочная система аптек ", "generic.png");
        JToolBarHelper::addNew("drugstories.add");
        JToolBarHelper::editList("drugstories.edit");
        JToolBarHelper::divider();
        JToolBarHelper::deleteList('','drugstories.remove');
        
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
}
