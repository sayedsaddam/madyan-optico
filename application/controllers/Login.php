<?php defined("BASEPATH") or exit("No direct script access allowed!");
/**
 * filename: Login.php
 */
class Login extends CI_Controller{
   /**
	* summary
	*/
   public function __construct(){
       parent::__construct();
      $this->load->model('Login_model');
   }
   // Load the login page.
   public function index(){
		$data['title'] = 'Login | Madyan Optico';
		$this->load->view('login', $data);
   }
    // Validate user.
   public function signin(){
      if($this->session->userdata('username')){
        redirect('dashboard');
   	}
    	$username = $this->input->post('username');
      $password = sha1($this->input->post('password'));
      // $otp = $this->input->post('otp');
      $user_signin = $this->Login_model->validate_user($username, $password);
      if($user_signin > '0'){
        $user_role = $user_signin['user_role'];
        $id = $user_signin['id'];
		  $name = $user_signin['fullname'];
      }
      if($user_signin == TRUE ){
        $this->session->set_userdata(array('id' => $id, 'username' => $username, 'fullname' => $name, 'user_role' => $user_role));
        if($this->session->userdata('user_role') == 'admin'){ // assign tasks to him/herself or other staff.
         redirect('dashboard');
        }elseif($this->session->userdata('user_role') == 'staff'){
         echo "I am an Employee.";
        }
      }else{
        $this->session->set_flashdata('login_error', '<strong>Aww snap! </strong>Username / password is incorrect or your account has not yet activated.');
        redirect($_SERVER['HTTP_REFERER']);
      }
   }
   // Logout.
   public function logout(){
      $this->session->sess_destroy('username');
   	$this->session->set_flashdata('logged_out', '<strong>Hooray !</strong> You have been logged out successfully, Login again .');
   	$this->index();
   }
}

?>
