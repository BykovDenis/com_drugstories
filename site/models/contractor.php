<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.modellist');

class DrugstoriesModelContractor extends JModelList{
    
    public function __construct() {  
        $this->_db = JFactory::getDbo();
        parent::__construct();
    }    
    
    public function getTable($name = 'Contractor', $prefix = 'Table', $options = array()) {  
        
        parent::getTable($name, $prefix, $options);
    }
           
    protected function getListQuery() {
        
        $query = $this->_db->getQuery(true);        
        $query->select(' contractor_id, name ');
        $query->from('#__contractor');
        $query->order('contractor_id');       
        
        return $query;
    }
        
    
    protected function _getList($query, $limitstart = 0, $limit = 0)
	{
        
    
        $limit = $this->_getListCount($this->getListQuery());
		$this->_db->setQuery($query, $limitstart, $limit);
		$result = $this->_db->loadObjectList();
                
		$this->getPagination();
                             
		return $result;
	}
        /*
        public function getPagination()
	{
            
                JError::raiseWarning(500, (String) '3_3  Модель rugstories.php getPagination()');
		// Get a storage key.
		$store = $this->getStoreId('getPagination');

		// Try to load the data from internal storage.
		if (isset($this->cache[$store]))
		{
			return $this->cache[$store];
		}

		// Create the pagination object.
		$limit = (int) $this->getState('list.limit') - (int) $this->getState('list.links');
		//$page = new JPagination($this->getTotal(), $this->getStart(), $limit);
                $page = new JPagination($this->getTotal(), $this->getStart(), $limit);                
		// Add the object to the internal cache.
		$this->cache[$store] = $page;
                
		return $this->cache[$store];
	}
    */
//   JError::raiseWarning(500, (String) $this->cache[$store]); 

 

}