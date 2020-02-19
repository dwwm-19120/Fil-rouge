<?php
if(empty($categories))
{
    ?>
    <h1>tableaux vide</h1>
    <p>pour le remplir</p>
   <a href="<?= site_url('administration/ajcat');?>"><button><i class="fas fa-pencil-alt"></i></button></a>
  
    <?php
}
else
{
    ?>
    <h1>categorie</h1>
    <p>pour ajouter une nouvelle categorie</p>
   <a href="<?= site_url('administration/ajcat');?>"><button><i class="fas fa-pencil-alt"></i></button></a>
   <hr>
<table>
<thead>
<tr>
    <th> </th>
    <th>id</th>
    <th>categorie</th>
</tr>
</thead>
<tbody>
<?php
        foreach($categories as $cat)
        {
            ?>
                <tr>
                    <td><a href="<?= site_url('administration/majCat/'.$cat->cat_id);?>"><button><i class="fas fa-pencil-alt"></i></button></a><a href="<?= site_url('administration/supcat/'.$cat->cat_id);?>"><button><i class="fas fa-trash-alt"></i></button></a></td>
                    <td><?=$cat->cat_id?></td>
                    <td><?=$cat->cat_nom?></td>
                </tr>
            <?php
        }
?>
</tbody>
</table>
<?php
}
?>