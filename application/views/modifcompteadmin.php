<div class="container">
    <div class="col-12">
        <div class="row">
            <div class="container">
                <h1 class="text-center"> detail de votre compte</h1>
            <div>
                <?=form_open("administration/maj_personnel")?>

            <div class="container col-12">
                <div class="row" >
                    <label for="nom" ></label>
                    <i id="inom"></i><input type="text" name="nom" id="nom2" class="form-control col-8 mr-auto ml-auto text-center fontAwesome" value="<?=$perso->pers_nom?>" >
                    <span id="idnom"></span>
                    <?php  echo  form_error("nom");?>
                </div>
            </div>

            <div class="container col-12">
                <div class="row" >
                    <label for="prenom" ></label>
                    <i id="iprenom"></i><input type="text" name="prenom" id="prenom2" class="form-control mr-auto ml-auto  text-center col-8 fontAwesome" value="<?=$perso->pers_prenom?>">
                    <span id="idprenom"></span>
                    <?php  echo  form_error("prenom");?>
                </div>
            </div>

            <div class="container col-12">
                <div class="row" >
                <label for="identifiant"></label>
                    <i id="iiden"></i><input name="tel" class="form-control col-8 mr-auto ml-auto  text-center fontAwesome" value="<?=$perso->pers_tel?>"  placeholder="&#xf007; Votre telephone" >
                    <span id="ididen"></span>
                    <?php  echo  form_error("identifiant");?>
            </div>
        </div>

        <div class="row form-group justify-content-around ">
            <button type="submit" class="btn btn-success btn-lg " name="FICheck" ><i class="fas fa-check"></i> Valider</button>
        </div>
            <?= form_close();?>
            </div>
            <br>
            <hr>
            <br>             
            <div class="row">
            <div class="container">
            <h1 class="text-center"> modification mot de passe</h1>
            <div>


            <?=form_open("administration/modifmdp")?>

            <div class="container col-12">
                <div class="row" >
                    <label for="MDP" ></label>
                    <i id="iMDP"></i><input type="password" name="MDP" id="MDP"  class="form-control col-8 mr-auto ml-auto  text-center fontAwesome" placeholder="&#xf084; Votre Mot De Passe" >
                    <span id="idMDP"></span>
                    <?php  echo  form_error("MDP");?>
                </div>
            </div>

            <div class="container col-12">
                <div class="row" >
                    <label for="MDPconf" ></label>
                    <i id="iconf"></i><input  type="password" name="MDPconf" id="MDPconf" class="form-control mr-auto ml-auto  text-center col-8 fontAwesome" placeholder="&#xf084; Confirmez Votre Mot De Passe" >
                    <span id="idconf"></span>
                    <?php  echo  form_error("MDPconf");?>
                </div>
            </div>

            <div class="row form-group justify-content-around ">
                <button type="submit" class="btn btn-success btn-lg " name="FICheck" ><i class="fas fa-check"></i> Valider</button>
            </div>

            </div>
            <?= form_close();?>

            <?=form_open("administration/suppradmi")?>

            <div class="row form-group justify-content-around ">
                <button type="submit"  class="btn btn-danger btn-lg " name="FICancel" ><i class="fas fa-times"></i> Supprimer</button>
            </div>

            <?= form_close();?>

            </div>
        </div>
    </div>
</div>