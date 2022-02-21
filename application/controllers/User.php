<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
## Contruct here--->>>
      function __construct(){
      parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url','form');
        $this->load->library('email');
        $this->load->model('Home');	
        $this->load->model('AdminModel');
      	
        $user = $this->session->userdata('userAuth');
      	$data['user'] = $user;
      	if(!empty($user)){
      	 $data['cartnumber']= $this->Home->getCartNum($user['email']);
      	}
      	
        $this->load->view('headLink',$data);
      
      	
        
     }
     

## >> HOME page here;;

	public function index()
	{
	    $this->load->view('dashboard');
	}
	
		public function submit_login()
	{
	    
	    $this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run() == true){
	    $email = $this->input->post('email');
	    $password = $this->input->post('password');
	    $userSession = $this->Home->checkUser($email, $password);
	    
	    	if (!empty($userSession)){
				
				
					$sessArray['id'] = $userSession['id'];
					$sessArray['name'] = $userSession['firstName'];
					$sessArray['email'] = $userSession['email'];
                    $sessArray['phone'] = $userSession['phone'];
					$this->session->set_userdata('userAuth',$sessArray);
				// 	redirect(base_url().'index');
				redirect(base_url().'User/dashboard');
				
			}else{
                //print_r($user);
                    $this->session->set_flashdata('msg','Email or password is not correct.');
                   redirect(base_url().'login');
			}
	    
		}else{
		
	    redirect(base_url().'login');
		    
		}
	}
	
			      public function logout()
	{
	   $this->session->unset_userdata('userAuth');
        redirect(base_url().'');
	
	}
	
	
	public function submitRegisteration(){
	    
	    $this->load->library('form_validation');
	    $this->form_validation->set_message('is_unique', 'This details are already exist, Please try another.');
			  
		$this->form_validation->set_rules('email','email','required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('phone','phone','required|is_unique[user.phone]');
		$this->form_validation->set_rules('password','Password','required');
		    
		    if($this->form_validation->run() == false){
			//$this->load->view('inc/header');
			$this->session->set_flashdata('msg', 'This details are already exist, Please try another.');
			redirect(base_url().'login');
		        

		    }else{
		    $data = array();
			$data['firstName'] = $this->input->post('first_name');
			$data['lastName'] = $this->input->post('last_name');
			$data['country'] = $this->input->post('country');
			$data['state'] = $this->input->post('state');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			$data['password'] = $this->input->post('password');
			$data['AuthToken'] = uniqid (rand ());
			
			$this->Home->submitUser($data);
			
			$this->session->set_flashdata('msg', 'Your account has been created.');
			redirect(base_url().'login');
			
		    }
			
		
		
	}
	
		public function dashboard()
		{
	 #title
	      $this->title="dashboard";  
	    $page['title']=$this->title;
	     $this->load->view('header_innerPage');
        ## HEader
          $sliderImg = $this->Home->fetchHeaderImg();
        $page['sliderImgs'] =  $sliderImg['img'];
	   $this->load->view('innerHeaderSlider',$page);
	   
	    
	    $this->load->view('my-account');
	    $this->load->view('footer_inner');
	
		}
	
	
	
	
	
}