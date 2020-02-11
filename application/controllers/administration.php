<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administration extends CI_Controller
{
  public function admin()
  {
    $this->template_admin->displayad('admin');
  }
}