<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Clients extends CI_model
{
    //-------------------------------------------------------------affichage---------------------------------------------------------------------------------
    /**
     * \brief affichage de la lite clients
     * \return tableaux de variable
     * \author FOVIAUX Nicolas
     * \date 20/02/2020
     */
    public function cliList()
    {
        $cli= $this->db->get('clients');
        return $cli->result();
    }
    //---------------------------------------------------------------detail----------------------------------------------------------------------------------
    /**
     * \brief detail du client 
     * \param id id du client selectionné
     * \return information du client
     * \author FOVIAUX Nicolas
     * \date 20/02/2020
     */
    public function cliDet($id)
    {
        $account=$this->db->where("cl_id",$id)->get('clients'); 
        
        return $account->row(); 
    }

        /**
     * \brief detail du client pour verif formulaire
     * \param mail mail du client selectionné
     * \return information du client
     * \author FOVIAUX Nicolas
     * \date 20/02/2020
     */
    public function cliMail($mail)
    {
        $account=$this->db->where("cl_mail",$mail)->get('clients'); 
        
        return $account->row(); 
    }
    
    //--------------------------------------------------------------ajout------------------------------------------------------------------------------------
    /**
     * \brief inscription client
     * \param aj information a ajouter
     * \author FOVIAUX Nicolas 
     * \date 20/02/2020
     */
    public function cliAj($aj)
    {
        $this->db->insert('clients',$aj);
    }
    //---------------------------------------------------------------maj-------------------------------------------------------------------------------------
    /**
     * \brief mise a jour client
     * \param id id du client
     * \param maj nouvelles information du client
     * \author FOVIAUX Nicolas
     * \date 20/02/2020
     */
    public function cliMaj()
    {
        $this->db->update('clients', $maj ,'cl_id='.$id);
    }
    //---------------------------------------------------------------suppression------------------------------------------------------------------------------
    /**
     * \brief supression client
     * \param id id du client
     * \author FOVIAUX Nicolas
     * \date 20/02/2020
     */
    public function cliSup()
    {
        $this->db->delete('clients','cl_id='.$id);
    }
}