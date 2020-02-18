<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personnel extends CI_model
{
  /**
* \brief requete de recuperation de donnée avec l'id
* \param  id recuperation de donnée avec l'id
* \return  tableau de variable => si resultat trouvé faux => is aucun resultat
* \author FOVIAUX Nicolas
* \date 17/02/2020
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
  /**
* \brief requete de recuperation de donnée avec l'email
* \param  mail recuperation de donnée avec l'email
* \return tableau de variable => si resultat trouvé faux => is aucun resultat
* \author FOVIAUX Nicolas
* \date 17/02/2020
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
  /**
* \brief requete de recuperation de donnée avec l'id
* \param  id recuperation de donnée avec l'id
* \return les information dans un tableau
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
    public function accountAdm2($id)
    {
        $account=$this->db->where("pers_id",$id)->get('personnels'); 
        
        return $account->row();    
    }
  /**
* \brief requete d'ajout d'un administrateur
* \param  aj tableau de variables
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
    public function ajout($aj)
{
$this->db->insert('personnels',$aj);
}

  /**
* \brief modification du mot de passe compte admin 
* \param  maj tableau de variables
* \param  id recuperation de l'id du compte
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
public function modif_mdp($maj,$id)
{
    $this->db->update('personnels',$data,'pers_id='.$id);
}
  /**
* \brief modification des infos compte admin 
* \param  maj tableau de variables
* \param  id recuperation de l'id du compte
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
public function modif_pers($maj,$id)
{
    $this->db->update('personnels',$maj,'pers_id='.$id);
}
  /**
* \brief supression du compte admin 
* \param  id recuperation de l'id du compte
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
public function supradmi($id)
{
    $this->db->delete('personnels','pers_id='.$id);
}
}
