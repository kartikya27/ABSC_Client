<?php

class ReplaceText {
public function replaceAdminText(){

$this->CI =& get_instance();
$contents = $this->CI->output->get_output();
$contents = str_replace("Climatrol",'ABSC Admin',$contents );
echo $contents ;

return;
}



}