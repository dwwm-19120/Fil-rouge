<div class="container">
<div class="col-12">
<div class="row">
<div>
<h1> detail de votre compte</h1>
</div>
<div>
<?=form_open("administration/maj_personnel")?>
    <label for="nom">nom</label>
    <input type="text" name="nom" value="<?=$perso->pers_nom?>">

    <label for="prenom">prenom</label>
    <input type="text" name="prenom" value="<?=$perso->pers_prenom?>">

    <label for="tel">tel</label>
    <input type="number" name="tel" value="<?=$perso->pers_tel?>">

    <input type="submit" value="envoyer">
<?= form_close();?>
</div>

<div>
<?=form_open("administration/modifmdp")?>

    <label for="MDP">nouveau Mot de passe</label>
    <input type="text">

    <label for="confMDP">confirmez votre mot de passe</label>
    <input type="text">
    <input type="submit" value="envoyer">
<?= form_close();?>

</div>
</div>
</div>
</div>