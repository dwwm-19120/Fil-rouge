<div class="col-12">
    <div class="row">
        <div class="container col-xl-8 col-sm-12">
        <p>veuillez remplir ce formulaire pour compléter une inscription</p>
            <?php echo form_open("administration/incsrip_personel",'class="form_control"');?>
                <fieldset class=" container p-4 ">
                    <legend class="text-center col-xl-2 col-sm-4 ml-auto mr-auto ">Inscription</legend>
                    <div class='row form-group mr-auto ml-auto'>
                        <div class="container col-xl-6 col-sm-12">
                        <div class="row" >
                            <label for="nom" ></label>
                            <i id="inom"></i><input type="text" name="nom" id="nom2" class="form-control col-8 mr-auto ml-auto text-center fontAwesome" placeholder="&#xf1ae; Votre nom" >
                            <span id="idnom"></span>
                            <?php  echo  form_error("nom");?>
                        </div>
                        </div>
                        <div class="container col-xl-6 col-sm-12">
                        <div class="row" >
                            <label for="prenom" ></label>
                            <i id="iprenom"></i><input type="text" name="prenom" id="prenom2" class="form-control mr-auto ml-auto  text-center col-8 fontAwesome" placeholder="&#xf1ae; Votre prenom" >
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
                            <i id="iiden"></i><input type="text" name="identifiant" id="identifiant" class="form-control col-8 mr-auto ml-auto  text-center fontAwesome"placeholder="&#xf007; Votre identifiant" >
                            <span id="ididen"></span>
                            <?php  echo  form_error("identifiant");?>
                        </div>
                        </div>
                        <div class="container col-xl-6 col-sm-12">
                        <div class="row" >
                            <label for="email" ></label>
                            <i id="imail"></i><input type="email" name="email" id="email2" class="form-control text-center col-8 mr-auto ml-auto  fontAwesome" placeholder="&#xf0e0; Votre Adresse Mail" >
                            <span id="idmail"></span>
                            <?php  echo  form_error("email");?>
                        </div>
                        </div>
                    </div>
                    <div class='row form-group mr-auto ml-auto'>
                        <div class="container col-xl-6 col-sm-12">
                        <div class="row" >
                            <label for="MDP" ></label>
                            <i id="iMDP"></i><input type="password" name="MDP" id="MDP"  class="form-control col-8 mr-auto ml-auto  text-center fontAwesome" placeholder="&#xf084; Votre Mot De Passe" >
                            <span id="idMDP"></span>
                            <?php  echo  form_error("MDP");?>
                        </div>
                        </div>
                        <div class="container col-xl-6 col-sm-12">
                        <div class="row" >
                            <label for="MDPconf" ></label>
                            <i id="iconf"></i><input  type="password" name="MDPconf" id="MDPconf" class="form-control mr-auto ml-auto  text-center col-8 fontAwesome" placeholder="&#xf084; Confirmez Votre Mot De Passe" >
                            <span id="idconf"></span>
                            <?php  echo  form_error("MDPconf");?>
                        </div>
                        </div>
                    </div>
                    </br>
                    <div class="row form-group justify-content-around ">
                 <button type="submit" class="btn btn-success btn-lg " name="FICheck" ><i class="fas fa-check"></i> Valider</button>
                    </div>
                </fieldset>
            <?php echo form_close();?>
        </div><!--container-->
    </div><!--row-->
</div><!--col-->