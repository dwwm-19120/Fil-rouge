<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fournisseurs extends CI_Controller
{

       /**
 * \brief page d'ajout fournisseur
 * \return  page formulaire d'ajout fournisseur
 * \author Augustin LEGRIS
 * \date 20/02/2020
 */
    public function fourniAj()
    {
        if($this->input->post())
        {
        $nom = "/^[a-zA-Z]*$/";
        $telephone = "/^[0-9\.]{14}$/";
        $mail ="/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/";
        $siret ="/^[0-9]{14}$/";
        $adresse ="/[0-9a-zA-Z]+(?:(?:[\'\s\-\/])?[a-zA-Z]+)*$/";
        $ville = "/[a-zA-Z]*\s*(?:[\'\-\/])*[a-zA-Z]*(?:[\'\-\/])*[a-zA-Z]*/";
        $persJoin ="/^[a-zA-Z]*$/";
        $prix ="/[0-9]{1,3}(?:\.){1}[0-9]{0,2}/";

        $this->form_validation->set_rules('nom','Nom',"required|regex_match[$nom]|is_unique[fournisseur.fourni_nom]",// is_unique evite les même ref en db
        array('required' => 'La %s est manquante','regex_match' => 'La %s est manquante','is_unique'=>'La %s existe déjà'));
        $this->form_validation->set_rules('telephone','Téléphone',"required|regex_match[$telephone]|is_unique[fournisseur.fourni_tel]",
        array('required' => 'Le %s manquant','regex_match' => 'Le %s incorrect',"is_unique"=>'Le %s existe déjà'));
        $this->form_validation->set_rules('mail','E-mail',"required|regex_match[$mail]", 
        array('required' => 'Le %s manquante','regex_match' => 'Le %s incorrect'));
        $this->form_validation->set_rules('siret','Siret',"required|regex_match[$siret]", 
        array('required' => 'Le %s manquant','regex_match' => 'Le numéro %s doit comporter 14 chiffres'));
        $this->form_validation->set_rules('adresse','adresse',"required|regex_match[$adresse]", 
        array('required' => 'L %s est à préciser','regex_match' => "Format incorrect %s"));
        $this->form_validation->set_rules('ville','Ville',"required|regex_match[$ville]", 
        array('required' => 'La %s est manquante','regex_match' => 'La %s est incorrect'));
        $this->form_validation->set_rules('persJoin','Personne joignable',"required|regex_match[$persJoin]", 
        array('required' => 'La %s est manquante','regex_match' => 'La %s est incorrect'));
        $this->form_validation->set_rules('prix','prix',"required|regex_match[$prix]", 
        array('required' => 'Le %s manquant','regex_match' => 'Le %s est incorrect, max 99999.99'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if($this->form_validation->run() == FALSE)
        {
            $this->template_admin->displayad('fourniAjouts');
        }
        else
        {
            $res=$this->input->post();
            $data=array('fourni_nom'=> $res['fourni'])
            $this->fournisseurs->fourniAj($data);
            redirect('administration/fournisseurs');
        }
    }
    else{
        $this->template_admin->displayad('fourniAjouts');
    }
}