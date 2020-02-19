<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Categories extends CI_model
{
    /**
     * \brief affichage toute la bable
     * \return table de variables
     * \autor Nicolas FOVIAUX
     * \date 19/02/2020
     */
    public function list()
    {
        $cat= $this->db->get('categorie');
        return $cat->row();
    }
}