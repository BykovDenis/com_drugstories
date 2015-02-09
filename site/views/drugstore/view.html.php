<?php

defined('_JEXEC') or die("Restricted access");

// Подключаем библиотеку представления Joomla.
jimport('joomla.application.component.view');

class DrugstoriesViewDrugstore extends JViewLegacy{
    
    protected $items;     

    function display($tpl = null) {
        
        $model = $this->getModel();   
        
        $this->items = $model->getItems();
        
        $doc = JFactory::getDocument();
        $title = $doc->setTitle('Атпеки Курска, аптеки в Курске '.$this->items[0]->contractor_name);
        $description = $doc->setDescription('Аптеки Курска, Аптеки в Курске,'.$this->items[0]->contractor_name.', всё для вашего здоровья');
                            
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
}
