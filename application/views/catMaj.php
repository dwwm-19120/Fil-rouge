<?php echo form_open("administration/majcat/".$categorie->cat_id,'class="form_control"');?>
                <fieldset class=" container p-4 ">
                    <legend class="text-center col-xl-2 col-sm-4 ml-auto mr-auto ">modifier une categorie</legend>
                        <div class='row form-group mr-auto ml-auto'>
                            <div class="container col-xl-6 col-sm-12">
                            <div class="row" >
                                <label for="nom" ></label>
                                <input type="text" name="cat" class="form-control col-8 mr-auto ml-auto text-center fontAwesome" value="<?=$categorie->cat_nom?>" >
                                <?php  echo  form_error("cat");?>
                            </div>
                            </div>
                        </div>
                    <div class="row form-group justify-content-around ">
                        <button type="submit" class="btn btn-success btn-lg " name="FICheck" ><i class="fas fa-check"></i> Valider</button>
                    </div>
                </fieldset>
<?php echo form_close();?>