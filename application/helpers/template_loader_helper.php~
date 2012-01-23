<?php

function load_template_polos($template_name, $data=NULL){
  $CI=& get_instance();
  $CI->load->view("base/header1.php");
  $CI->load->view("base/header2.php");  
  $CI->load->view($template_name.".php", $data);
  $CI->load->view("base/footer.php");

}
function load_template_side($template_name, $data=NULL){
  $CI=& get_instance();
  $CI->load->view("base/header1.php");
  $CI->load->view("base/header2.php");  
  $CI->load->view("base/side.php");
  $CI->load->view($template_name.".php", $data);
  $CI->load->view("base/footer.php");

}
function load_template_admin($template_name, $data=NULL){
  $CI=& get_instance();
  $CI->load->view("admin/header.php");  
  $CI->load->view("admin/side.php");
  $CI->load->view($template_name.".php", $data);
}
?>