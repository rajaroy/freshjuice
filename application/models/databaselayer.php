<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Databaselayer extends CI_Model
{
   public function getAll()
   {
       $query = $this->db->query('SELECT * FROM products ORDER BY product_id');
       
       if($query->num_rows() > 0)
       {
            return $query->result_array();
       }
       else
       {
           return array(0 => array(
               "product_name" => "No result"
           ));
       }
   }
   
   public function setProduct()
   {
       // hier ga je de insert maken
       // Gata lastig worden en je moet VEEEL YouTube kijken en shit, ik weet ook nit alles perfect.. Skype doet fokop dus dan maar ff zo.
       // ja man ik snap je
   }
}
?>