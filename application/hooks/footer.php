<?php

class footerClass {
    
public function footerLoad(){

    $CI = & get_instance();
    if($CI->is_hookable){
    
    $CI->load->model("Home");
            $tablename = 'clients_associates';
	        $data['client'] = $CI->Home->fetchContent($tablename);
    $CI->load->view('footer',$data);


}

}

}