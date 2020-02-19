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
                    <td><a href="<?= site_url('administration/ajcat');?>"><button><i class="fas fa-pencil-alt"></i></button></a><a href=""><button><i class="fas fa-trash-alt"></i></button></a></td>
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