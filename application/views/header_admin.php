<header>

<div class="container">
<!--titre-->
    <div class="text-center">

        <h1>bienvenue <?=$_SESSION['info']->pers_identif?> sur l'espace administrateur </h1>
    </div>
<!--bouton deconnexion et retour a la partie visible du site-->
    <div class="ml-auto mr-auto">
            <a href="<?= site_url('administration/modifcompteadmin');?>" title="votre compte" class="btn btn-outline-dark"><i class="fas fa-user"></i></a>  
            <a href="<?= site_url('structure/acceuil');?>" title="acceuil" class="btn btn-outline-dark"><i class="fas fa-home"></i></a>
            <a href="<?= site_url('administration/decopersonnel');?>" title="deconnexion" class="btn btn-outline-dark"><i class="fas fa-power-off"></i></a>
    </div>
</div>
<!--libre a vous de rajouté des trucs jai plus d'inspi lol T_T-->
</header>
<hr>
<br>