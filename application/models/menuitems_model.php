<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menuitems_Model extends MY_model
{
	 protected $_table = 'menu_items';
	// protected $_table = 'categories';
	function get_menu($cat_id = null)  
      {  
           // $this->db->where('email', $email);  
           // $this->db->where('password', $password);  
           // $query = $this->db->get('admins');  
        if($cat_id == null){
         $where=' WHERE c.id = m.category_id ';
        }else{
          $where=' WHERE c.id ='.$cat_id;
        }

  		$query = $this->db->query("SELECT m.id,m.item,m.ingredient,m.rate,m.image,m.category_id,c.id as cid,c.name FROM menu_items AS m, categories AS c ".$where." ");

       if($query->num_rows() > 0)  
       {  
            return $query->result_array(); 
       }  
       else  
       {  
            return false;       
       }  
    }
}
