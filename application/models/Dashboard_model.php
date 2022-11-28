<?php defined('BASEPATH') or exit('No direct script access allowed!');
/**
 * filename: Dashboard_model
 */
class Dashboard_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
      parent::__construct();
    }
    // save client information
    public function save_client_info($data)
    {
    	$this->db->insert('clients', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    // Add new user
    public function get_clients()
    {
    	$this->db->select();
	}
}
