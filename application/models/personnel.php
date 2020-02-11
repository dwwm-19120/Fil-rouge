<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personnel extends CI_model
{
    public function accountAdm($identifiant)
    {
        $account=$this->db->where("pers_identif",$identifiant)->get('personnels'); 
        if(!$account->result()){
            return false;
         }else{
          return $account->row();
         }
    }
}
