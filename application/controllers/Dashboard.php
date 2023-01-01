<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard_model');
		if(!$this->session->userdata('username')){
			redirect('login');
		 }
	}
	// index method > the dashboard home page
	public function index(){
		$data['title'] = 'Dashboard | Madyan Optico';
		$data['body'] = 'dashboard';
		$this->load->view('components/template', $data);
	}
	// clients list > list of all clients page
	public function clients(){
		$data['title'] = 'Clients | Madyan Optico';
		$data['body'] = 'clients/clients';
		$data['clients'] = $this->dashboard_model->get_clients();
		$this->load->view('components/template', $data);
	}
	// add client > loading the add client form
	public function add_client(){
		$data['title'] = 'Add Client | Madyan Optico';
		$data['body'] = 'clients/add-client';
		$this->load->view('components/template', $data);
	}
	// save client information
	public function save_client_info(){
		$pcn = random_int(00000, 99999);
		$data = array(
			'name' => $this->input->post('name'),
			'age' => $this->input->post('age'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'pcn' => $pcn,
			'added_by' => $this->session->userdata('id')
		);
		if($this->dashboard_model->save_client_info($data)){
			$this->session->set_flashdata('success', '<strong>Success! </strong>Client/Patient information save successfully.');
			redirect('dashboard/clients');
		}else{
			$this->session->set_flashdata('failed', '<strong>Failed! </strong>Something went wrong while saving information.');
			redirect($_SERVER['HTTP_REFERERE']);
		}
	}
	// client detail > edit client
	public function edit_client($id){
		$data['title'] = 'Edit Client | Madyan Optico';
		$data['body'] = 'clients/add-client';
		$data['detail'] = $this->dashboard_model->client_detail($id);
		$this->load->view('components/template', $data);
	}
}
