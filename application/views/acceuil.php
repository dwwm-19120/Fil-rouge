<!------------------------------------------------------PROMO------------------------------------------------------------------>
    <main class="col-12">
        <div class="vitrine">
            <div class="row pl-4 mt-4">
                <figure class="col-9">
                    <a class="" href="/">
                        <img src="<?php echo base_url('assets\img\pub_guitare.png');?>" alt="Gibson Ibanez -15%" title="Réduction sur les Gibson">
                    </a>
                </figure>
                <figure class="col-2">
                    <a href="/">
                        <img src="<?php echo base_url('assets\img\banniere_droite_prix.png');?>" alt="information livraison" title="Livraison gratuite à partir de 19€ d'achat">
                    </a>
                </figure>
            </div>
            <div class="row">
                <figure class="col-sm-12 my-5 p-0">
                    <a href="/">
                        <img src="<?= base_url('assets/img/').'banniere_centre_4_pictos'?>" alt="conditions">
                    </a>
                </figure>
            </div>
        </div>
<!-------------------------------------------------CATEGORIES---------------------------------------------------->
    <!--foreach + img OKAYYYY !!-->
    <!--<h1>Nos categories</h1>
        <?php foreach ($images as $img) : ?> 
            <figure class="row">
                <a href="/" class="col-3"><img src="<?php echo base_url();?>/assets/img/<?php echo $img['image'];?>"></a> 
            </figure>
        <?php endforeach;?>-->
<!-------------------------------------------MEILLEURES VENTES----------------------------------------------------------->
<!--JS a s'occupée-->
        <div class="row">
            <h2 class="col-6 title">Nos meilleurs ventes</h2><h2 class="col-6 title">Nos partenaires</h2>
        </div>   
        <div class="row">
            <figure class="col-2">
                <a class="ventes-link" href="/">
                    <img class="mx-4" src="<?php echo base_url('assets/img/TOP_VENTES_guitare.png');?>" onmouseover="this.src='assets/img/TOP_VENTES_ROLL_OVER_guitare.png'" onmouseout="this.src='assets/img/TOP_VENTES_guitare.png'" title="top guitare" alt="">
                </a>
            </figure>
            <figure class="col-2">
                <a class="ventes-link" href="/">
                    <img class="mx-4" src="<?= base_url('assets/img/TOP_VENTES_saxo.png')?>" onmouseover="this.src='assets/img/TOP_VENTES_ROLL_OVER_saxo.png'" onmouseout="this.src='assets/img/TOP_VENTES_saxo.png'" title="top saxo" alt="">
                </a>
            </figure>

            <figure class="col-2">
                <a class="ventes-link" href="/">
                    <img class="mx-4" src="<?= base_url('assets/img/TOP_VENTES_piano.png');?>" onmouseover="this.src='assets/img/TOP_VENTES_ROLL_OVER_piano.png'" onmouseout="this.src='assets/img/TOP_VENTES_piano.png'" title="top piano" alt="">
                </a>
            </figure>
            <figure class="col-6">
                <a class="partenaires-link" href="/">
                    <img class="mx-4" src="<?= base_url('assets/img/partenaires_4_logos.png');?>" title="nos partenaires" alt="partenaires" ref="nofollow">
                </a>
            </figure>
        </div>
        </main>


