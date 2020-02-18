<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administration extends CI_Controller
{

  /**
* \brief connexion admin
* \brief  verification des informations avec des regles
* \brief  si regle nn ok retour sur page login
* \brief  si identifiant incorrecte retour sur la page login avec erreur
* \brief  si mdp incorrecte retour sur page login avec erreur
* \todo /!\ faire une session differente admin ou commercial /!\ 
* \return  creation session admin et redirection sur la page admin
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function idpersonnel()
  {
    if($this->session->userdata('admin')!=true)
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
            $this->template->display('idAdmin');
        }
        elseif(!password_verify($this->input->post('mot_de_passe'),$autorisation->pers_mdp))
        {
            $this->session->set_flashdata('errorMdp', 'Mot de passe incorrect');
            $this->template->display('idAdmin');
        }
        else
        {
            $this->session->set_userdata('admin', TRUE);
            $this->session->set_userdata('info',$autorisation->pers_identif);
            $this->session->set_userdata('id',$autorisation->pers_id);
            redirect('administration/admin');
        }
    }
    else
    {
      redirect('administration/admin');
    }
  }
  /**
* \brief deconnexion admin
* \brief  suprime les sessions admin, info et id
* \brief  detruit la session
* \return  redirection acceuil
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function decopersonnel()
  {
    $this->session-> unset_userdata('admin','info','id');
    $this ->session->sess_destroy();
    $this->template->display('acceuil');
  }
  /**
* \brief ajout d'admin
* \brief  verification si le mail existe dans la Base de Donnee
* \brief  verification des informations avec des regles
* \brief  si regle nn ok retour sur page ajout de personnel
* \brief  sinon hachage du mot de passe 
* \brief  changer les nom de champ dans un tableau
* \brief  envoi des variable en base
* \return  redirection vers la page admin
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function incsrip_personel()
  {
    if($this->input->post())
    {
        $result[]=$this->input->post();
        $result2=$this->personnel->accountAdm1($this->input->post("email"));
        
        $this->form_validation->set_error_delimiters('<div class=" mr-auto ml-auto">','</div>'); 
  
        $this->form_validation->set_rules( 'nom','nom' ,'required|regex_match[/^[a-züéâäàåçêëéèïîìôöòûùÿáíóú\' ñA-ZÄÅÉÖÇÜÑÀÂÉÈÔÙÛÇ|-]+$/]', array('required'=>'veuillez saisir votre nom','regex_match'=> 'vous utilisez des caractéres speciaux' )); 
        $this->form_validation->set_rules( 'prenom','prenom' ,'required|regex_match[/^[a-züéâäàåçêëéèïîìôöòûùÿáíóú\' ñA-ZÄÅÉÖÇÜÑÀÂÉÈÔÙÛÇ|-]+$/]', array('required'=>'veuillez saisir votre prenom', 'regex_match'=> 'vous utilisez des caractéres speciaux')); 
        $this->form_validation->set_rules( 'identifiant','identifiant' ,'required|is_unique[personnels.pers_identif]|regex_match[/[[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+[0-9]*/]', array('required'=>'veuillez saisir un identifiant','is_unique'=>'l\'identifiant existe deja' ,'regex_match'=>'identifiant invalide')); 
        $this->form_validation->set_rules( 'email','mail','required|is_unique[personnels.pers_mail]|regex_match[/^([a-zA-Z0-9_\.-]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i]', array('required'=>'veuillez saisir une adresse mail','is_unique'=>'l\'adresse email existe deja','regex_match'=>'adresse mail invalide')); 
        $this->form_validation->set_rules( 'MDP','MDP','required|regex_match[/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}/]', array('required'=>'veuillez saisir votre mot de passe', 'regex_match'=> 'le mot de passe doit comporté au mon une majauscule,un caractere speciale et doit etre composé de 8 caracteres minimale')); 
        $this->form_validation->set_rules( 'MDPconf','MDPconf','required|matches[MDP]', array('required'=>'veuillez confirmer votre mot de passe', 'matches'=> 'mot de passe incorrect')); 
        
        
        if($this->form_validation->run()==false)
          {
            $this->template_admin->displayad('inscrip');
          var_dump($this->form_validation->run());
          }
          else
          {
              foreach($result as $result)
              {
                  $result['MDP']=password_hash($this->input->post("MDP"),PASSWORD_DEFAULT);
              }
              $data=array(
                  'pers_nom'=> $result['nom'],
                  'pers_prenom'=>$result['prenom'],
                  'pers_identif'=>$result['identifiant'],
                  'pers_mail'=>$result['email'],
                  'pers_mdp'=> $result['MDP']
              );
              $this->personnel->ajout($data);
  
  
              $this->template_admin->displayad('admin');
          }
      }
      else
      {
        $this->template_admin->displayad('inscrip');
      }
  }
  /**
* \brief modification d'admin
* \brief  connexion au compte dans la Base de Donnee grace a l'id stocké dans la session
* \brief  recuperatios des informations et les mettre dans la view pour affichage
* \brief  si bouton post est enclancher recuperation de variables
* \brief  changement des nom de champs dans le tableau pour l'envoi a la base
* \brief  envoi des variable a la base
* \return  redirection vers la page admin
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function maj_personnel()
  {
    $id=$this->session->userdata('id');
    $data['perso']=$this->personnel->accountAdm2($id);
    if($this->input->post())
    {
      $result=$this->input->post();
      $maj=array(
        'pers_nom'=> $result['nom'],
        'pers_prenom'=>$result['prenom'],
        'pers_tel'=>$result['tel']
    );
    $this->personnel->modif_pers($maj,$id);
    redirect('administration/idpersonnel');
    }
    else
    {
      $this->template_admin->displayad('modifcompteadmin',$data);
    }
  }
  /**
* \brief modification mot de passe
* \brief  connexion au compte dans la Base de Donnee grace a l'id stocké dans la session
* \brief  recuperations des informations et les mettre dans la view pour affichage (si erreur)
* \brief  pose de regles mour le mot de passe
* \brief  si les regles sont ok hachage du mot de passe 
* \brief  changer les nom de champ dans un tableau
* \brief  envoi des variable en base
* \return  redirection vers la page admin
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function maj_MDP()
  {
    $id=$this->session->userdata('id');
    $data['perso']=$this->personnel->accountAdm2($id);

    $this->form_validation->set_error_delimiters('<div class=" mr-auto ml-auto">','</div>');

    $this->form_validation->set_rules( 'MDP','MDP','required|regex_match[/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}/]', array('required'=>'veuillez saisir votre mot de passe', 'regex_match'=> 'le mot de passe doit comporté au mon une majauscule,un caractere speciale et doit etre composé de 8 caracteres minimale')); 
    $this->form_validation->set_rules( 'MDPconf','MDPconf','required|matches[MDP]', array('required'=>'veuillez confirmer votre mot de passe', 'matches'=> 'mot de passe incorrect')); 
    if($this->form_validation->run()==true)
    {
      $result=password_hash($this->input->post("MDP"),PASSWORD_DEFAULT);
      $maj=array(
        'pers_mdp'=> $result
    );
      $this->personnel->modif_mdp($maj,$id);
      redirect('administration/idpersonnel');
    }
    else
    {
      $this->template_admin->displayad('modifcompteadmin',$data);
    }
  }
  /**
* \brief suppression admin
* \brief  connexion au compte dans la Base de Donnee grace a l'id stocké dans la session
* \brief  si bouton validé envoie de la requete de supression
* \return  redirection vers la page acceuil
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function suppradmi()
  {
    $id=$this->session->userdata('id');
    if($this->input->post())
    {
      $this->personnel->supradmi($id);
      redirect('structure/acceuil');
    }
  }
  /**
* \brief Page d'acceuil administrateur
* \return  affichage de la page admin
* \author FOVIAUX Nicolas
* \date 17/02/2020
*/
  public function admin()
  {
    $this->template_admin->displayad('admin');
  }
  /**
* \brief page d'ajout de produit
* \brief  *
* \brief  *
* \brief  *
* \brief  *
* \brief  *
* \brief  *
* \return  *
* \author FOVIAUX Nicolas
* \date 18/02/2020
*/
    public function ajout()
    {
      $this->template_admin->displayad('ajout_produit');
    }
}