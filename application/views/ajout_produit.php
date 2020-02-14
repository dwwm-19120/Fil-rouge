<div class="container">
<div class="col-12">
<div class="row">
<h3><b><u>Ajout de produit</u></b></h3>

        <?= form_open_multipart("",'class="form_control"');?>
                <div class="form-group">
                    <div>
                        <a href="<?php echo site_url('');?>"><img src="<?php echo base_url("").""?>" alt="" title="" class="" ></a>
                    </div>
                    <br>
                    <!--CATEGORIE -->
                    <div>
                        <label for="categorie" class="sr-only">categorie</label>
                        <input type="text" id="categorie" name="categorie" placeholder="Reference">
                        <?php  echo  form_error("categorie");?>
                    </div>
                    <!--REFERENCE -->
                    <div>
                        <label for="reference"class="sr-only" >reference</label>
                        <select name="reference" id="reference">
                        <option  disabled selected>Categorie</option>
                        <?php
                        //foreach (* as*)
                        {
                        ?>
                        <!--
                        <option value="<?= $rowB->cat_id?>"> <?=$rowB->cat_nom?></option>
                        -->
                        <?php
                       // }
                        ?>
                        </select>
                        <?php  echo  form_error("reference");?>
                    </div>
                    <!--LIBELLE -->
                    <div>
                        <label for="libelle" class="sr-only">libellé</label>
                        <input type="text" name="libelle" id="libelle" placeholder="Libelle">
                        <?php  echo  form_error("libelle");?>
                    </div>
                    <!--DESCRIPTION -->
                    <div>
                        <label for="description" class="sr-only">description</label>
                        <textarea name="description" id="description" cols="20" rows="1" placeholder="Description"></textarea>
                        <?php  echo  form_error("description");?>
                    </div>
                    <!--PRIX -->
                    <div>
                        <label for="prix" class="sr-only">prix</label>
                        <input type="number" step="any" name="prix" id="prix" placeholder="prix">
                        <?php  echo  form_error("prix");?>
                    </div>
                    <!--STOCK -->
                    <div>
                        <label for="stock" class="sr-only">stock</label>
                        <input type="number" name="stock" id="stock" placeholder="stock">
                        <?php  echo  form_error("stock");?>
                    </div>
                    <!--COULEUR -->
                    <div>
                        <label for="couleur" class="sr-only">couleur</label>
                        <input type="text" name="couleur" id="couleur" placeholder="couleur">
                        <?php  echo  form_error("couleur");?>
                    </div>
                     <!--FORMAT PHOTO -->
                     <div>
                         <label for="photo" class="sr-only">Photo</label>
                         <input type="file" name="photo" id="photo" placeholder="photo">
                     </div>
                     <!--BLOQUAGE -->
                     <div>
                         <label for="bloque">Bloqué</label>
                         <input type="radio" name="bloque" id="bloque" value="1"><span>oui</span>
                         <input type="radio" name="bloque" id="bloque" value="0" checked><span>non</span>
                     </div>
                    <div>
                        <input  type="submit" name="ajout" value="ajouté ce produit" >
                    </div>
                </div>
                <?= form_close();?>
</div>
</div>
</div>