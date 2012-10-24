<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
                $this->load->model('Databaselayer');
                $data['products'] = $this->Databaselayer->getAll('products');
                
		$this->load->view('menu');
                $this->load->view('welcome_message', $data);
	}
        
        public function moo()
        {
            $this->load->view('getme');
        }
}