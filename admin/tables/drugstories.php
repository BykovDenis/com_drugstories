<?php

defined('_JEXEC') or die("Restricted access");

class TableStores extends JTable{    

    public function __construct($db)   {
        parent::__construct("#__stores", 'store_id', $db);
    }   
    
}

