<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function index()
    {
        parent::template('product/index','Product');
    }

}