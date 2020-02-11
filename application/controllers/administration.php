<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administration extends CI_Controller
{
  /*
  -------------------------------------------CONNEXION ADMIN-------------------------------------------------------------------------------------------------------------
  -verification des informations avec des regles
  -si regle nn ok retour sur page login
  -si identifiant incorrecte retour sur la page login avec erreur
  -si mdp incorrecte retour sur page login avec erreur
  -/!\ faire une session differente admin ou commercial /!\
  -si tt est ok creation session admin et redirection sur la page admin
  */
  public function idpersonnel()
  {
    $result[]=$this->input->post();
    $this->form_validation->set_error_delimiters('<div class=" mr-auto ml-auto">','</div>');
    $this->form_validation->set_rules('identifiant','identifiant','required',array('required'=>'veuillez saisir votre identifiant'));
    $this->form_validation->set_rules('mot_de_passe','mot_de_passe','required',array('required'=>'veuillez saisir votre mot de passe'));
    $autorisation=$this->personnel->accountAdm($this->input->post("identifiant"));
    if($this->form_validation->run()==false)
    {
        $this->template->display('idAdmin');
    }
    elseif($autorisation==false)
    {
        $this->session->set_flashdata('errorId','Identifiant incorrect');
        $this->template->display('idpersonnel');
    }
    elseif(!password_verify($this->input->post('mot_de_passe'),$autorisation->pers_mdp))
    {
        $this->session->set_flashdata('errorMdp', 'Mot de passe incorrect');
        $this->template->display('idpersonnel');
    }
    /*elseif($autorisation->cli_id>10)
    {
        $this->template->display('connexion');
    }*/
    else
    {
        $this->session->set_userdata('admin', TRUE);
        $this->session->set_userdata('id',$autorisation ->pers_id);
        redirect('administration/admin');
    }
  }
  /*
  -----------------------------------------------PARTI ADMIN -------------------------------------------
  -avec tout les droits
  -
  
  */
  public function admin()
  {
    $this->template_admin->displayad('admin');
  }
/*
-------------------------------------------------------PAGE AJOUT---------------------------------------------
*/
  public function ajout()
  {
    $this->template_admin->displayad('ajout_produit');
  }
  /*
  ------------------------------------------------------------PAGE INSCRIPTION PERSONNEL-------------------------------
  */
  public function incsrip_personel()
  {
    if($this->input->post())
    {
        $result[]=$this->input->post();
        $result2=$this->personnel->account($this->input->post("email"));
        
        $this->form_validation->set_error_delimiters('<div class=" mr-auto ml-auto">','</div>'); 
  
        $this->form_validation->set_rules( 'nom','nom' ,'required|regex_match[/^[a-züéâäàåçêëéèïîìôöòûùÿáíóú\' ñA-ZÄÅÉÖÇÜÑÀÂÉÈÔÙÛÇ|-]+$/]', array('required'=>'veuillez saisir votre nom','regex_match'=> 'vous utilisez des caractéres speciaux' )); 
        $this->form_validation->set_rules( 'prenom','prenom' ,'required|regex_match[/^[a-züéâäàåçêëéèïîìôöòûùÿáíóú\' ñA-ZÄÅÉÖÇÜÑÀÂÉÈÔÙÛÇ|-]+$/]', array('required'=>'veuillez saisir votre prenom', 'regex_match'=> 'vous utilisez des caractéres speciaux')); 
        $this->form_validation->set_rules( 'identifiant','identifiant' ,'required|is_unique[clients.cli_identifiant]|regex_match[/[[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+[0-9]*/]', array('required'=>'veuillez saisir un identifiant','is_unique'=>'l\'identifiant existe deja' ,'regex_match'=>'identifiant invalide')); 
        $this->form_validation->set_rules( 'email','mail','required|is_unique[clients.cli_mail]|regex_match[/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i]', array('required'=>'veuillez saisir une adresse mail','is_unique'=>'l\'adresse email existe deja','regex_match'=>'adresse mail invalide')); 
        $this->form_validation->set_rules( 'MDP','MDP','required|regex_match[/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}/]', array('required'=>'veuillez saisir votre mot de passe', 'regex_match'=> 'le mot de passe doit comporté au mon une majauscule,un caractere speciale et doit etre composé de 8 caracteres minimale')); 
        $this->form_validation->set_rules( 'MDPconf','MDPconf','required|matches[MDP]', array('required'=>'veuillez confirmer votre mot de passe', 'matches'=> 'mot de passe incorrect')); 
        
        
        if($this->form_validation->run()==false)
          {
              $this->template->display('inscription');
          
          }
          else
          {
              foreach($result as $result)
              {
                  $result['MDP']=password_hash($this->input->post("MDP"),PASSWORD_DEFAULT);
              }
              $data=array(
                  'cli_nom'=> $result['nom'],
                  'cli_prenom'=>$result['prenom'],
                  'cli_identifiant'=>$result['identifiant'],
                  'cli_mail'=>$result['email'],
                  'cli_MDP'=> $result['MDP']
              );
              $this->requete->inscription($data);
  
  
              $this->template->display('acceuil');
          }
      }
      else
      {
          $this->template->display('inscription');
      }
  }
}