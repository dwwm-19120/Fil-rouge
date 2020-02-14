<div class="text-center identification ">
<fieldset class= "d-inline-flex p-2 ">
<?php echo form_open("administration/idpersonnel",'class="form_control"');?>
<br>
    <h2>connexion admin</h2>
     <div>
        <label for="nom" class="sr-only">nom</label>
        <input class="fontAwesome" name="identifiant" type="text" id="nom" placeholder="&#xf007; Nom d'Utilisateur">
        <?php  echo  form_error("identifiant");?>
        </div>
    <div>
        <label for="mot_de_passe" class="sr-only">mot de passe</label>
        <input class="fontAwesome"  id="mot_de_passe" name="mot_de_passe" type="password" placeholder="&#xf084; Mot de Passe">
        <?php  echo  form_error("mot_de_passe");?>
    </div>
</br>
<button class="btn btn-primary " type="submit" name="envoyeradm">connexion</button>
<?php echo form_close();?>
</fieldset>
</div>
