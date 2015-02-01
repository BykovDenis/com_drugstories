<?php

defined('_JEXEC') or die("Restricted access");

function DrugstoriesBuildRoute(&$query){
    
    $segments = array();    
      
    if(isset($query['layout'])){
        $segments[] = $query['layout'];
        unset($query['layout']);
    }
    if(isset($query['id'])){
        $segments[] = $query['id'];
        unset($query['id']);
    }
        
    return $segments;    
}

function DrugstoriesParseRoute($segments){
    $vars = array();
    switch ($segments[0]){
        case 'drugstories':
            $vars['layout'] = 'drugstories';
            break;
        case 'drugstore':
            $vars['layout'] = 'drugstore';            
            $vars['store_id'] = $segments[1];                   
            break;
        
    }
    return $vars;
}