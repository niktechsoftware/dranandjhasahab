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
	$data['contend'] = 'enquiry';
	$data['footer'] = 'footer';
	$data['footerjs'] = 'home_js';
	$this->load->view("base/body", $data);
}

public function about()
{

	$data['title'] = 'Home Page';
	$data['headercss'] = 'home_css';
	$data['header'] = 'header';
	$data['contend'] = 'about';
	$data['footer'] = 'footer';
	$data['footerjs'] = 'home_js';
	$this->load->view("base/body", $data);
}

public function sex_ayurveda()
{

	$data['title'] = 'Home Page';
	$data['headercss'] = 'home_css';
	$data['header'] = 'header';
	$data['contend'] = 'sex_ayurveda';
	$data['footer'] = 'footer';
	$data['footerjs'] = 'home_js';
	$this->load->view("base/body", $data);
}





public function diseases()
{

	$data['title'] = 'Home Page';
	$data['headercss'] = 'home_css';
	$data['header'] = 'header';
	$data['contend'] = 'diseases';
	$data['footer'] = 'footer';
	$data['footerjs'] = 'home_js';
	$this->load->view("base/body", $data);
}

public function ayurveda_infertility()
{

	$data['title'] = 'Home Page';
	$data['headercss'] = 'home_css';
	$data['header'] = 'header';
	$data['contend'] = 'ayurveda_infertility';
	$data['footer'] = 'footer';
	$data['footerjs'] = 'home_js';
	$this->load->view("base/body", $data);
}

public function gallery()
{

	$data['title'] = 'Home Page';
	$data['headercss'] = 'home_css';
	$data['header'] = 'header';
	$data['contend'] = 'gallery';
	$data['footer'] = 'footer';
	$data['footerjs'] = 'home_js';
	$this->load->view("base/body", $data);
}

	


}