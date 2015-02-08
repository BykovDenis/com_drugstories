<?php

defined('_JEXEC') or die("Restricted access");

function DrugstoriesBuildRoute(&$query){
           
    $segments = array();    
    
    if(isset($query['contractor'])){
        $segments[] =$query['contractor'];
        unset($query['contractor']);
    }

    if(isset($query['view'])){
        $segments[] =$query['view'];
        unset($query['view']);
    }         
   
    if(isset($query['contractor_id'])){
        $segments[] = $query['contractor_id'];
    
    //$session = JFactory::getSession();
    //$session->set('contractor_id',$query['contractor_id']);     
    //JRequest::setVar('contractor_id', $query['contractor_id']);
        
        unset($query['contractor_id']);
    }
    
    
    if(isset($query['store_id'])){
        $segments[] = $query['store_id'];
        unset($query['store_id']);
    }
    
    
//    $_SESSION['segments'] = $segments;
    return $segments;    
}

function DrugstoriesParseRoute($segments){
    $vars = array();          
  
    switch ($segments[0]){
        case 'contractor':
            $vars['view'] = 'contractor';                           
            break;
        
        case 'drugstories':
            $vars['view'] = 'drugstories';             
            $vars['contractor_id'] = $segments[1];      
            break;        
        
        case 'drugstore':
            $vars['view'] = 'drugstore';            
            $vars['store_id'] = $segments[1];                   
            break;
        
    }       
    
//    $_SESSION['vars'] = $vars;
    return $vars;
}

