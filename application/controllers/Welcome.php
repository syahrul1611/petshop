<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		parent::template('home','Home',['css/home.css'],['js/home.js']);
	}
}
