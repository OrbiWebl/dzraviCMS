<?php
require_once PATH_FRAMEWORK.'/legacy/WL_Model.php';
class widgets_model extends WL_Model{
    
   
    public function getList(){
        
        $get = $_GET;
        
        $items = new stdClass();
        $items->position = (isset($get['position'])) ? $get['position'] : '';
        $items->name = (isset($get['name'])) ? $get['name'] : '';
        $items->w_name = (isset($get['w_name'])) ? $get['w_name'] : '';
        $items->published = (isset($get['published'])) ? $get['published'] : '';
        $items->order_by = (isset($get['order_by'])) ? $get['order_by'] : '';
        $items->desc = (isset($get['desc'])) ? $get['desc'] : '';
        
        $where = array();
        
        if($items->position){
            $where[] = '`position` = '.DB::dbStr($items->position);
        }
        
        if($items->name){
            $where[] = '`name` LIKE %'.DB::dbStr($items->name).'%';
        }
        
        if($items->w_name){
            $where[] = '`c_name` = '.DB::dbStr($items->w_name);
        }
        
        if($items->published){
            $where[] = '`published` = '.DB::dbStr($items->published);
        }
        
        $orderby = '';
        
        if($items->order_by){
            $orderby .= 'ORDER BY '.$items->order_by;
        }
        else{
            $orderby .= 'ORDER BY id ';
        }
        if($items->desc && $orderby){
            $orderby .= $items->desc;
        }
        else{
            $orderby .= $items->desc;
        }
        
        $where = count($where) ? ' WHERE (' . implode(') AND (', $where) . ') ' : '';
        
        DB::setQuery('SELECT * FROM widgets '.$where.' '.$orderby);
        $total = DB::getNum();
      
        $data = DB::getList();
        
        $array = array(
            'filter' => $items,
            'total' => $total,
            'data' => $data
        );
        
        return $array;
        
    }
    
    public function getTables(){
        return array(
            'id' => 0,
            'position' => '',
            'name' => '',
            'w_name' => '',
            'ordering' => 0,
            'published' => 0
        );
    }
    
    public function getComponents(){
        DB::setQuery('SELECT * FROM components ');
        $data = DB::getList();
       
        if($data){
            return $data;
        }
        return array();
        
    }
}
