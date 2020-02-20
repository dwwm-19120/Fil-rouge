<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Fournisseur extends CI_model
{
    //----------------------------------------------------------affichage-------------------
      /**
     * \brief affichage toute la table
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 20/02/2020
     */
    public function fourniList()
    {
        $fourni= $this->db->get('fournisseur');
        return $fourni->result();
    }
    //--------------------------------------------------------detail----------------------
      /**
     * \brief affichage du detail
     * \param id id du fournisseur
     * \return table variable(info du fourni)
     * \autor Augustin LEGRIS
     * \date 20/02/2020
     */
    public function FourniDetail($id)
    {
    $detail=$this->db->where("fourni_id",$id)->get('fournisseur'); // requêtes

    return $detail->row();
    }
    //---------------------------------------------------------ajout----------------------
        /**
     * \brief ajout d'un fournisseur
     * \param add fournisseur a ajouté
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 20/02/2020
     */
    public function fourniAj($add)
    {
        $this->db->insert('fournisseur',$add);
    }
    //---------------------------------------------------------maj---------------------
       /**
     * \brief maj d'un fournisseur
     * \param id id du fournisseur
     * \param maj variable à ajouter
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 20/02/2020
     */
    public function fourniMaj($id,$maj)
    {
        $this->db->update('fournisseur', $maj ,'fourni_id='.$id);
    }
    //-----------------------------------------------------------suppression------------
        /**
     * \brief supression d'un fournisseur
     * \param id id du fournisseur a supprimé
     * \autor Augustin LEGRIS
     * \date 20/02/2020
     */
    public function delFourni($id)
    {
        $this->db->delete('fournisseur','fourni_id='.$id);
    }
}
}