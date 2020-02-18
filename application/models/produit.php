<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Produits extends CI_model
{
   /**
    *\brief affichage produit
    * \return ltableau de variable
    * \author FOVIAUX Nicolas
    * \date 17/02/2020
    */
    public function list()
    {
       $products= $this->db->get('produits');
       return $products->row();
    }






}