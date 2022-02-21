<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
## Contruct here--->>>

     public function __construct(){
      parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url','form');
        $this->load->library('email');
         $this->load->model('Home');	
        $this->load->model('AdminModel');
      	
         $user = $this->session->userdata('userAuth');
      	 $data['user'] = $user;
        
        $tablename = 'service';
	    $data['serviceList'] = $this->Home->fetchContent($tablename);
        $this->load->view('header',$data);
        
        
     }
     public $is_hookable = TRUE;

## >> HOME page here;;

	public function index()
	{
	     $this->title="Home";  
	    $page['title']=$this->title;
	    $this->load->view('title',$page);
	    
	    ##  Fetch Header Slider For Index
	        $this->load->view('indexSlider');
	    
	   
	        $data['blog'] = $this->AdminModel->getAllBlogs();
	        $data['mission'] = $this->AdminModel->getMission();
	        
	        $tablename = 'service';
	        $data['serviceList'] = $this->Home->fetchContent($tablename);
	        
	        $item = "ABOUT OUR COMPANY" ;
	        $tablename = 'aboutUs';
	        $where = 'section';
	        $data['contentObj'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	        $item = "HOW DO WE DIFFERENTIATE?" ;
	        $data['contentAboutINdex'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	        
	        $item = "Mission" ;
	        $data['contentMission'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	        
	        ## fetchContent
	        $tablename = 'testimonial';
	        $data['testimonial'] = $this->Home->fetchContent($tablename);
	     
		$this->load->view('index',$data);
		
// 		$this->load->view('footer');
	}
	
## About Page >>>>>>>>	
	public function profile()
	{
	     $this->title="Profile";  
	    $page['title']=$this->title;
	     $this->load->view('title',$page);
	     
	        $item = "profile" ;
	        $tablename = 'aboutUs';
	        $where = 'section';
	   ##>>>>> Fetch about Us content 
	        $aboutUs['content'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	        $this->load->view('profile',$aboutUs);
		  //  $this->load->view('footer');
	}



		public function about()
	{
	     $this->title="ABOUT US";  
	    $page['title']=$this->title;
	     $this->load->view('title',$page);
	     
	    $item = "aboutus" ;
	   $tablename = 'aboutUs';
	   $where = 'section';
	  ##>>>>> Fetch about Us content 
	    $aboutUs['content'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	    $item = "WE ARE ALWAYS BEST" ;
	    $aboutUs['contentExtra'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	    
	    $item = "profile" ;
	    $aboutUs['contentProfile'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	    
	     $tablename = "corevalue" ;
	    $aboutUs['coreValue'] = $this->Home->fetchContent($tablename);
	   
		$this->load->view('about',$aboutUs);
// 		$this->load->view('footer');
	}
	
#### Contact Pgae >>>>>>>>>>>>contact
		public function contact()
	{
	    $this->title="Contact";  
	    $page['title']=$this->title;
	    $this->load->view('title',$page);
	    
	    $tablename = 'contact';
	    $details['contact'] = $this->Home->fetchContent($tablename);
	    #$contact
		$this->load->view('contact',$details);
// 		$this->load->view('footer');
	}
	
	
#### Services Pgae >>>>>>>>>>>>services
		public function services()
	{
	    $serviceType = $this->input->get('content');
	    $item = $this->input->get('id');
	   
	    $tablename = 'services_content';
	    $where = 'service';
	    $service['services'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	    
	    
	        $item = "services" ;
	        $tablename = 'aboutUs';
	        $where = 'section';
	        $service['content'] = $this->Home->fetchItemViaName($where,$item,$tablename);
	        
	      
	        $tablename = 'service';
	        $service['serviceList'] = $this->Home->fetchContent($tablename);
	    
	        $this->title=$serviceType;  
	        $page['title']=$this->title;
	    
	        $this->load->view('title',$page);
	  
		$this->load->view('service',$service);
// 		$this->load->view('footer');
	}
	
	
// 		public function services1()
// 	{
// 	    ### Fetch Service details also
// 	   $service['services'] = $this->Home->fetchService();
	    
// 	     $this->title="Service";  
// 	    $page['title']=$this->title;
// 	   $this->load->view('header');
	  
// 		$this->load->view('services1',$service);
// 		$this->load->view('footer');
// 	}
	
		
// 		public function services2()
// 	{
// 	    ### Fetch Service details also
// 	   $service['services'] = $this->Home->fetchService();
	    
// 	     $this->title="Service";  
// 	    $page['title']=$this->title;
// 	   $this->load->view('header');
	  
// 		$this->load->view('services2',$service);
// 		$this->load->view('footer');
// 	}
		
		
		
		
	
public function newsletter(){
    
        $this->load->library('form_validation');
	    $this->form_validation->set_message('is_unique', 'This details are already exist, Please try another.');
        $this->form_validation->set_rules('email','email','required|valid_email|is_unique[subscribe.email]');
        
          if($this->form_validation->run() == false){
		
		 $this->load->view('index');
		        
		    }else{
        
    $subscribeEmail['email'] = $this->input->post('email');
    $subscribedEmail = $this->Home->SubscribeEmail($subscribeEmail);
    $this->session->set_flashdata('msg', 'Email has subscribed successfully.');
    redirect(base_url());
		    }
    
}	
	
	

	

	
	
		public function blog(){
	    #title
	      $this->title="Blog";  
	    $page['title']=$this->title;
	     $this->load->view('title',$page);
       
	        $tablename = 'blog';
	        $data['blogs'] = $this->Home->fetchContent($tablename);
	        
	    $this->load->view('blog',$data);
	   // $this->load->view('footer');
	}
	


	

	
	
	
	
	##3 class end here ;;
}
