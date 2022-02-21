<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

##### fetchHeaderImg here

public function fetchHeaderImg(){

        return  $this->db->get('innerHeaderSlider')->row_array();
}

### fetchHeaderImgIndex 
public function fetchHeaderImgIndex(){

        return $this->db->get('headerSlider')->result();
}



###>>>>>fetch Content here from table in function all in one

public function fetchContent($tablename){

        return $row = $this->db->get($tablename)->result();
}


### Fetch item according to id
        function fetchItemDetails($item_id,$tablename){
                 
                $this->db ->where('id',$item_id);
                return $this->db->get($tablename)->row_array();
                 
        }
        

### Fetch item according to Specific column
        function fetchItemViaName($where,$item,$tablename){
                 
                $this->db ->where($where,$item);
                return $this->db->get($tablename)->result();
                 
        }
        
# SubscribeEmail >>>>>>>>
         public function SubscribeEmail($subscribeEmail){

            return $this->db->insert('subscribe',$subscribeEmail);
        }
    
        
        
        

     

   public function authorise()
        {
             $user = $this->session->userdata('userAuth');
          if(!empty($user)){
              return true;
          }else{
              return false;
          }
          
     }




## Class End      
}