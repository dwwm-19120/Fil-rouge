<div class="container">
<div class="col-12">
<div class="row">

<h1> detail de votre compte</h1>

<?=form_open("administration/maj_personnel")?>
    <label for="nom">nom</label>
    <input type="text" name="nom" value="">

    <label for="prenom">prenom</label>
    <input type="text" name="prenom" value="">

    <label for="tel">tel</label>
    <input type="number" name="tel" value="">

    <label for="id"></label>
    <input type="hidden" name="id" value="">

    <input type="submit" value="envoyer">
<?= form_close();?>
<?=form_open("administration/modifmdp")?>

    <label for="MDP">nouveau Mot de passe</label>
    <input type="text">

    <label for="confMDP">confirmez votre mot de passe</label>
    <input type="text">
<?= form_close();?>
</div>
</div>
</div>