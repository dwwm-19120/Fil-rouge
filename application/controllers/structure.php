<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Structure extends CI_Controller
{
//----------------------------------------------------------------------AFFICHAGE--------------------------------------------------------------------------------
  /**
* \brief Acceuil
* \return  affichage de la page acceuil
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function acceuil ()
  {
      $this->template->display('acceuil');
  }
    /**
* \brief Mention l'egale
* \return  affichage de la page mention legale
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function info()
  {
      $this->template->display('infos');
  }
//------------------------------------------------------------------------INSCRIPTION CLIENT-------------------------------------------------------------------------
/**
 * \brief inscrition client
 * \return information client
 * \autor FOVIAUX Nicolas
 * \date 20/02/2020
 */
public function inscripCli()
{
  if($this->input->post())
  {
  $result[]=$this->input->post();
  $result2=$this->clients->cliMail($this->input->post("email"));
  $this->form_validation->set_error_delimiters('<div class=" mr-auto ml-auto">','</div>'); 

  $this->form_validation->set_rules( 'nom','nom' ,'required|regex_match[/^[a-züéâäàåçêëéèïîìôöòûùÿáíóú\' ñA-ZÄÅÉÖÇÜÑÀÂÉÈÔÙÛÇ|-]+$/]', array('required'=>'veuillez saisir votre nom','regex_match'=> 'vous utilisez des caractéres speciaux' )); 
  $this->form_validation->set_rules( 'prenom','prenom' ,'required|regex_match[/^[a-züéâäàåçêëéèïîìôöòûùÿáíóú\' ñA-ZÄÅÉÖÇÜÑÀÂÉÈÔÙÛÇ|-]+$/]', array('required'=>'veuillez saisir votre prenom', 'regex_match'=> 'vous utilisez des caractéres speciaux')); 
  $this->form_validation->set_rules( 'identifiant','identifiant' ,'required|is_unique[clients.cl_identif]|regex_match[/[[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+[0-9]*/]', array('required'=>'veuillez saisir un identifiant','is_unique'=>'l\'identifiant existe deja' ,'regex_match'=>'identifiant invalide')); 
  $this->form_validation->set_rules( 'email','mail','required|is_unique[clients.cl_mail]|regex_match[/^([a-zA-Z0-9_\.-]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i]', array('required'=>'veuillez saisir une adresse mail','is_unique'=>'l\'adresse email existe deja','regex_match'=>'adresse mail invalide')); 
  $this->form_validation->set_rules( 'MDP','MDP','required|regex_match[/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}/]', array('required'=>'veuillez saisir votre mot de passe', 'regex_match'=> 'le mot de passe doit comporté au mon une majauscule,un caractere speciale et doit etre composé de 8 caracteres minimale')); 
  $this->form_validation->set_rules( 'MDPconf','MDPconf','required|matches[MDP]', array('required'=>'veuillez confirmer votre mot de passe', 'matches'=> 'mot de passe incorrect')); 
  
  
  if($this->form_validation->run()==false)
    {
      $this->template->display('cliInscrip');
    var_dump($this->form_validation->run());
    }
    else
    {
        foreach($result as $result)
        {
            $result['MDP']=password_hash($this->input->post("MDP"),PASSWORD_DEFAULT);
        }
        $data=array(
            'cl_nom'=> $result['nom'],
            'cl_prenom'=>$result['prenom'],
            'cl_identif'=>$result['identifiant'],
            'cl_mail'=>$result['email'],
            'cl_mdp'=> $result['MDP']
        );
        $this->clients->cliAj($data);
        redirect('structure/acceuil');
    }
  }
  else
  {
    $this->template->display('cliInscrip');
  }
}
//------------------------------------------------------------------------MODIF CLIENT-------------------------------------------------------------------------------
//------------------------------------------------------------------------CONNEXION CLIENT---------------------------------------------------------------------------

//-----------------------------------------------------------------------PAS FINI------------------------------------------------------------------------------------















}