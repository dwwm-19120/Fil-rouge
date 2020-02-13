<div class="container">
<div class="col-12">
<div class="row">

<h1> detail de votre compte</h1>

<?=form_open("administration/modifcompte")?>
    <fieldset class=" container p-4 ">
        <div class='row form-group mr-auto ml-auto'>
            <div class="container col-xl-6 col-sm-12">
                <div class="row" >
                    <label for="nom" ></label>
                    <i id="inom"></i><input type="text" name="nom" id="nom2" class="form-control col-8 mr-auto ml-auto text-center " value="" >
                    <span id="idnom"></span>
                    <?php  echo  form_error("nom");?>
                </div>
            </div>
            <div class="container col-xl-6 col-sm-12">
                <div class="row" >
                    <label for="prenom" ></label>
                    <i id="iprenom"></i><input type="text" name="prenom" id="prenom2" class="form-control mr-auto ml-auto  text-center col-8 " value="" >
                    <span id="idprenom"></span>
                    <?php  echo  form_error("prenom");?>
                </div>
            </div>
        </div>
        <!-------------------------------------------------------------------------------------------------------->
        <div class='row form-group mr-auto ml-auto'>
            <div class="container col-xl-6 col-sm-12">
                <div class="row" >
                    <label for="identifiant"></label>
                    <i id="iiden"></i><input type="text" name="identifiant" id="identifiant" class="form-control col-8 mr-auto ml-auto  text-center " value="" >
                    <span id="ididen"></span>
                    <?php  echo  form_error("identifiant");?>
                </div>
            </div>
            <div class="container col-xl-6 col-sm-12">
                <div class="row" >
                    <label for="email" ></label>
                    <i id="imail"></i><input type="email" name="email" id="email2" class="form-control text-center col-8 mr-auto ml-auto  "  value="" >
                    <span id="idmail"></span>
                    <?php  echo  form_error("email");?>
                </div>
            </div>
        </div>
        <div class='row form-group mr-auto ml-auto'>
            <div class="container col-xl-6 col-sm-12">
                <div class="row" >
                    <label for="MDP" ></label>
                    <i id="iMDP"></i><input type="password" name="MDP" id="MDP"  class="form-control col-8 mr-auto ml-auto  text-center " value="" >
                    <span id="idMDP"></span>
                    <?php  echo  form_error("MDP");?>
                </div>
            </div>
        <div class="container col-xl-6 col-sm-12">
            <div class="row" >
                <label for="MDPconf" ></label>
                <i id="iconf"></i><input  type="password" name="MDPconf" id="MDPconf" class="form-control mr-auto ml-auto  text-center col-8 "  value="" >
                <span id="idconf"></span>
                <?php  echo  form_error("MDPconf");?>
            </div>
            </div>
        </div>
        </br>
        <div class="row form-group justify-content-around ">
            <button type="submit" class="btn btn-success btn-lg " name="FICheck" ><i class="fas fa-check"></i> Valider</button>
            <button type="cancel" class="btn btn-danger btn-lg " name="FICancel" ><i class="fas fa-times"></i> Annuler</button>
        </div>
    </fieldset>
<?= form_close();?>

</div>
</div>
</div>