<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DrajadController extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/overview');
	}
	public function about()
	{
		$this->load->view('admin/about');
	}
	public function contact()
	{
		$this->load->view('admin/contact');
	}
}
