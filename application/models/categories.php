<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Categories extends CI_model
{//--------------------------------------------affichage--------------------------------------------------------------
    /**
     * \brief affichage toute la table
     * \return table de variables
     * \author Nicolas FOVIAUX
     * \date 19/02/2020
     */
    public function list()
    {
        $cat= $this->db->get('categorie');
        return $cat->result();
    }
     /**
     * \brief affichage la table
     * \param id id du champs
     * \return table de variables
     * \author Nicolas FOVIAUX
     * \date 19/02/2020
     */
    public function catTable($id)
    {
        $account=$this->db->where("cat_id",$id)->get('categorie'); 
        
        return $account->row();  
    }
//----------------------------------------------ajout---------------------------------------------------------------------------
    /**
     * \brief ajout d'une categorie
     * \param aj categorie a ajouté
     * \return table de variables
     * \author Nicolas FOVIAUX
     * \date 19/02/2020
     */
    public function catAj($aj)
    {
        $this->db->insert('categorie',$aj);
    }
//------------------------------------------------Mise a jour-------------------------------------------------------------------------
   /**
     * \brief maj d'une categorie
     * \param id id de la categorie
     * \param maj variable à ajouter
     * \return table de variables
     * \author Nicolas FOVIAUX
     * \date 19/02/2020
     */
    public function catMaj($id,$maj)
    {
        $this->db->update('categorie', $maj ,'cat_id='.$id);
    }
//--------------------------------------------------------supression---------------------------------------------------------------------------------
    /**
     * \brief supression d'une categorie
     * \param id id de la categorie a supprimé
     * \author Nicolas FOVIAUX
     * \date 19/02/2020
     */
    public function delCat($id)
    {
        $this->db->delete('categorie','cat_id='.$id);
    }
}