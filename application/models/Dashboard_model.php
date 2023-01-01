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
    	return $this->db->get('clients')->result();
		}
		// Get single client by ID
		public function client_detail($id){
			return $this->db->get_where('clients', array('id' => $id))->row();
		}
		// update client info
		public function update_client_info($id, $data){
			$this->db->where('id', $id);
			$this->db->update('clients', $data);
			return true;
		}
		// activate or deactivate a client
		public function delete_client($id){
			$result = $this->db->query("UPDATE clients SET `status` = NOT `status` WHERE id=$id");
		return $result ? true : false;
		}
}
