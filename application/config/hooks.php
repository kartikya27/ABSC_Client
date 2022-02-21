<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['display_override'] = array(
        'class'    => 'ReplaceText',
        'function' => 'replaceAdminText',
        'filename' => 'changeHeadingAdmin.php',
        'filepath' => 'hooks'
);
$hook['post_controller'] = array(
        'class'    => 'footerClass',
        'function' => 'footerLoad',
        'filename' => 'footer.php',
        'filepath' => 'hooks',
        // 'params'   => array('beer', 'wine', 'snacks')
);