<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function index()
{

	  $data['title'] = 'Dr. Anand Jha Sahab-Annapurna Ayurveda';
		$data['headercss'] = 'home_css';
		$data['header'] = 'header';
		$data['contend'] = 'homepage';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'home_js';
    $this->load->view("base/body", $data);
}

public function enquiry()
{

	$data['title'] = 'Home Page';
	$data['headercss'] = 'home_css';
	$data['header'] = 'header';
	$data['contend'] = 'homepage';
	$data['footer'] = 'footer';
	$data['footerjs'] = 'home_js';
	$this->load->view("base/body", $data);
}

	


}