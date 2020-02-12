<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personnel extends CI_model
{
    /*
    -----------------------------------------------requete de recuperation info personnel--------------------------------------------
    */
    public function accountAdm($email)
    {
        $account=$this->db->where("pers_mail",$email)->get('personnels'); 
        if(!$account->result()){
            return false;
         }else{
          return $account->row();
         }
    }
/*
---------------------------------------------------- ajouter un personnel-----------------------------------
*/

    public function ajout($aj)
{
$this->db->insert('personnels',$aj);
$id = $this->db->insert_id();

return $id;
}

/*
---------------------------------------------------------------------------------------------------------------------------
*/
public function modif_mdp($id)
{
    $this->db->update('personnels',$data,'pers_id='.$id);
}

}
