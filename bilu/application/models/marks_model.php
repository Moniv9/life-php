<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Marks_model extends CI_Model {

    var $item;
    var $title;
    var $url;
    var $tags;
    
    
    function __construct()
    {
        parent::__construct();
    }
    
   public function getlist()
    {
        $query = $this->db->query("SELECT * FROM info;");
        return $query->result();   
    }
    
   public function save($p2,$p3,$p4)
   {

		$this->title=$p2;
	    $this->url=$p3;
	    $this->tags=$p4;
	    $words=explode(',',$p4);
        
	    for($i=0;$i<count($words);$i++){
		   
		   $this->item=trim($words[$i])."_".date("dmyHis", time());
		   $this->db->insert('marks',$this);
		   
	    }
   
   } 
   
   public function search_tags($p1)
   {
  
       $this->db->like('item',$p1,'after');
       $query = $this->db->get('marks');
         
	   return $query->result();
	   
   }    
    
    
    
}
