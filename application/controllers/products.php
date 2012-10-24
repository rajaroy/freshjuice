<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Products extends CI_Controller {
        
        public function index()
	{
            $this->load->model('Databaselayer');
            $data['products'] = $this->Databaselayer->getAll('products');

            $this->load->view('menu');
            $this->load->view('all_products', $data);
        }
        
        public function expiring()
        {
            $this->load->model('Databaselayer');
            $data['products'] = $this->Databaselayer->getAll('products');

            $nextWeek = time() + (14 * 24 * 60 * 60);
            $data['two_weeks'] = $two_weeks = date('Y-m-d', $nextWeek);
            
            $this->load->view('menu');
            $this->load->view('expiring', $data);
        }
        
        public function refill()
        {
            $this->load->model('Databaselayer');
            $data['products'] = $this->Databaselayer->getAll('products');
            
            $this->load->view('menu');
            $this->load->view('refill', $data);
        }
    }

?>
