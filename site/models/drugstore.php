<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.modellist');
jimport('joomla.libraries.cms.pagination'); 

class DrugstoriesModelDrugstore extends JModelList{
    
    private $perPage;
    private $limitstart;
    private $pagination;
    
    public function __construct() {  
        $this->_db = JFactory::getDbo();
        parent::__construct();
        
        $this->perPage = 25;
        $this->limitstart = JRequest::getInt('limitstart',0);    
    }    
    
    public function getTable($name = 'Stores', $prefix = 'Table', $options = array()) {  
        
        parent::getTable($name, $prefix, $options);
    }
   
  
    public function getTotal() {
        
        $query = $this->_db->getQuery(true);
        $query->select('store_id');
        $query->from('#__stores');
	if(JRequest::getVar('contractor_id'))
		$query->where('contractor_id ='.JRequest::getVar('contractor_id'));
        $this->_db->setQuery($query);
        $this->_db->query();
        $total= $this->_db->getNumRows();
        
        return $total;        
    }
     
    

    public function getItems() {  
        
        $session = JFactory::getSession();
       
        $query = $this->_db->getQuery(true);
        $query->select('cr.contractor_id, ss.name as header_store, ss.store_id, ss.name as store_name, cs.name as city_name, ss.address, ss.phones, cr.name as contractor_name');
        $query->from('#__stores as ss');
	$query->innerJoin('#__contractor as cr on ss.contractor_id = cr.contractor_id');
	$query->innerJoin('#__cities as cs on ss.city_id = cs.city_id'); 
        if(JRequest::getVar('store_id'))
		$query->where('ss.store_id ='.JRequest::getVar('store_id'));
        $query->order('ss.store_id');  
        $this->_db->setQuery($query, $this->limitstart, $this->perPage);
        $this->_db->query();
        $rows=$this->_db->loadObjectList();
               
        return $rows;
    }
    
      
//   JError::raiseWarning(500, (String) $this->cache[$store]); 

 

}