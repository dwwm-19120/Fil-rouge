<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Structure extends CI_Controller
{
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


}