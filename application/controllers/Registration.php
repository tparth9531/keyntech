<?php   

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Registration extends CI_Controller
{
	
	function __construct()
	{
		// code...

		parent::__construct();
		$this->load->library(array('upload','form_validation'));
		$this->load->helper(array('form','url'));

	}


	public function index()
	{
		


		$this->load->view('registration/view');
	}

	public function get_data()
	{
		/*echo "<pre>";
		print_r($_POST);
		die();*/


		$this->form_validation->set_rules('username','Username','trim|required');		
		$this->form_validation->set_rules('email_id','Email','trim|required|valid_email');		
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('cpwd', 'Re-enter Password', 'required|matches[pwd]');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');

		if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('registration/view');
        }
        

        
        	
        

		$username=$this->input->post('username');
		$email_id=$this->input->post('email_id');
		$password = $this->input->post('pwd', true);
		$pwd = password_hash($password, PASSWORD_BCRYPT);	
		$dob=$this->input->post('dob');	
		$mobile=$this->input->post('mobile');
		$add_1=$this->input->post('add_1');
		$add_2=$this->input->post('add_2');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$country=$this->input->post('country');
		$reason=$this->input->post('reason');
			
		
		$data = array(
			'username'=>$username,
			'email_id'=>$email_id,
			'pwd'=>$pwd,
			'dob'=>$dob,
			'mobile'=>$mobile,
			'add_1'=>$add_1,
			'add_2'=>$add_2,
			'city'=>$city,
			'state'=>$state,
			'country'=>$country,
			'reason'=>$reason,
			
		);

		$this->db->insert('registration',$data);
	}

	public function uploadImage() { 
   
      $data = [];
   
      $count = count($_FILES['files']['name']);
    
      for($i=0;$i<$count;$i++){
    
        if(!empty($_FILES['files']['name'][$i])){
    
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  
          $config['upload_path'] = "<?php echo base_url('assets/files')?>"; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000';
          $config['file_name'] = $_FILES['files']['name'][$i];
   
          $this->load->library('upload',$config); 
    
          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
   
            $data['totalFiles'][] = $filename;
          }
        }
   
      }
   
      $this->load->view('registration/view', $data); 
   }
}



?>