<!----------------------------------------------------PARTIE ADMIN---------------------------------------------------------------------------------------------------------------------
-ajout de produit
-supression/modif produit
-commande produit
-fait les factures
-verif la commande
-historique commande
-liste fournisseurs
-liste produit
-liste client

/!\ cette partie utilise un autre template qui ne prend ni le header ni le footer /!\
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<header>
<div class="container">
<!--titre-->
    <div class="text-center">
        <h1>bienvenue <!--$identifiant--> sur l'espace administrateur </h1>
    </div>
<!--bouton deconnexion et retour a la partie visible du site-->
    <div class="float-right">
            <a href="<?= site_url('');?>" title="acceuil" class="btn btn-outline-dark"><i class="fas fa-home"></i></a>
            <a href="<?= site_url('');?>" title="deconnexion" class="btn btn-outline-dark"><i class="fas fa-power-off"></i></a>
    </div>
</div>
<!--libre a vous de rajouté des trucs jai plus d'inspi lol T_T-->
</header>
<div class="container col-4">
<div class="col-12">
<div class="row">
    <h2><u>menue</u></h2>
    <br>
    <ul>
        <li><a href="">ajouter un produit</a></li>
        <li><a href="">espace facturation</a></li>
        <li><a href="">espace commande</a></li>
        <li><a href="">espace fournisseur</a></li>
        <li><a href="">espace relation clients</a></li>
    </ul>
</div>
</div>
</div>
<div class="container col-8">
<div class="col-12">
<div class="row">
<!----------------------------------------------------------- LISTE DES PRODUITS----------------------------------------------------------------------
<table class="table-bordered ">
            <thead>
                <tr>
                    <th class= "col"><b>Photo</b></th>
                    <th class="col"><b>ID</b></th>
                    <th class= "col"><b>Catégorie</b></th>
                    <th class= "col"><b>Libellé</b></th>
                    <th class= "col"><b>Prix</b></th>
                    <th  class=" col " ><b>Couleur</b></th>
                    <th  class="col"><b>Ajout</b></th>
                    <th  class="col "><b>Modif</b></th>
                    <th  class="col"><b>Bloqué</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($produit as $row) 
                {
                ?>
                <tr>
                    <td ><a href="<?php echo site_url("jarditou/detadmin/".$row->pro_id);?> "><img class='visuel img-thumbnail img-fluid rounded' src='<?php echo base_url("assets/img/").$row->pro_id.".".$row->pro_photo ;?>'></a></td>
                    <td ><?=$row->pro_id?></td>
                    <td ><?=$row->pro_ref?></td>
                    <td ><a href="<?php echo site_url("jarditou/detadmin/".$row->pro_id)?>"><?=$row->pro_libelle?></a></td>
                    <td ><?=$row->pro_prix?>€</td>
                    <td  ><?=$row->pro_couleur?></td>
                    <td  ><?=$row->pro_d_ajout?></td>
                    <td  ><?=$row->pro_d_modif?></td>
                    <td  ><?=$row->pro_bloque?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            </table>-->
</div>
</div>
</div>
