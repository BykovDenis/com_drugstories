<?php

defined('_JEXEC') or die("Restricted access");

class TableContractor extends JTable{    

    public function __construct($db)   {
        parent::__construct("#__contractor", 'contractor_id', $db);
    }   
    
}

