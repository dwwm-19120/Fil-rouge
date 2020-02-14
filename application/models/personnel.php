<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personnel extends CI_model
{
    /*
    -----------------------------------------------requete de recuperation info personnel--------------------------------------------
    */
    public function accountAdm($id)
    {
        $account=$this->db->where("pers_identif",$id)->get('personnels'); 
        if(!$account->result()){
            return false;
         }else{
          return $account->row();
         }
    }
/*
----------------------------------------------requete de verif pour inscription----------------------------------------------------------------
*/
    public function accountAdm1($mail)
    {
        $account=$this->db->where("pers_mail",$mail)->get('personnels'); 
        if(!$account->result()){
            return false;
         }else{
          return $account->row();
         }
    }
/*
---------------------------------------------requete de recuperation variable personnel--------------------------------------------------------------
*/
    public function accountAdm2($id)
    {
        $account=$this->db->where("pers_id",$id)->get('personnels'); 
        
        return $account->row();    
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
