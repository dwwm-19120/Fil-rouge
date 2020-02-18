<div class="col-12">
    <div class="row">
    <div class="container text center col-3 sm-8 pt-2 pb-2">
<ul>
    <li><a href="">ajouter un produits</a></li>
    <?=form_open()?>
    <label for="categorie"class="sr-only" >categories</label>
    <select name="categorie">
    <option  disabled selected>Categorie</option>
    <?php
        foreach ($categorie as $rowB)
        {
        ?>
        <option value="<?= $rowB->cat_id?>"> <?=$rowB->cat_nom?></option>
        <?php
        }
        ?>
        </select>
    <?=form_close()?>
</ul>
</div>
<div class="table-responsive col-xl-10 col-sm-12 ">
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
   
            <td ><a href="<?php echo site_url("".$row->pro_id);?> "><img class='visuel img-thumbnail img-fluid rounded' src='<?php echo base_url("assets/img/"). .".".  ;?>'></a></td>
            <td ><?=$row->pro_id?></td>
            <td ><?=$row->pro_ref?></td>
            <td ><a href="<?php echo site_url("".$row->pro_id)?>"><?=$row->pro_libelle?></a></td>
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
            </table>
        </div><!-- fin du container-->
</div><!--container-->
</div><!--row-->
</div><!--col-->
