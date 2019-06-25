<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chefs_Model extends MY_model
{
	
	public function get_chefs()
	{
		$this->db->order_by("id", "desc");
	    $this->db->limit(3);
	    $query = $this->db->get('chefs');
	    return $query->result();
	}
}
