<header>
    <div class="container pl-0 pr-0">
        <div class="col-12">
            <div class="row" style="background:url('<?php echo base_url('assets/img/3_bandes.png');?>');">
                <figure class=" col-md-3 d-none d-md-block pl-0">
                    <a class="navbar-brand" href="" title="Vers l'accueil de Village Green">
                        <img class="d-inline-blocks" src="<?= base_url('assets/img/').'logo village green.png'?>" alt="logo de l'entreprise village green" title="logo">
                    </a>
                </figure>
                <div class="col-md-9 col-xs-12 pl-md-0 pr-md-0">
                    <nav class="navbar navbar-expand-sm firstNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item col-3">
                                <a class="nav-link active" href="" title="Information du site">infos</a>
                            </li>

                            <div class="dropdown nav-link col-5">
                                <button class="" type="button" data-toggle="dropdown">Espace Client<span class="void"></span>
                                </button>
                                <div class="dropdown-menu">
                                    <form class="drop-connexion" method="post" action="/">
                                    <!--Gauche-->
                                        <span>Êtes-vous déjà clients chez nous ?</span>

                                        <input class="form-control" type="text" name="mail" placeholder="Adresse E-mail">
                                        <input class="form-control" type="text" name="password" placeholder="Mot de passe">

                                        <input class="form-check-control" type="checkbox" name="always_connexion">
                                        <label for="always_connexion">Rester connectée ?</label>

                                        <button name="connexion" class="btn btn-success">Se connecter maintenant</button>
                                        <label  class="text-center" for="connexion">
                                            <a href="/" title="mot de passe perdue?">Vous avez oublié votre mot de passe?</a>
                                        </label>
                                    </form>
                                    <form class="drop-inscription" method="post" action="/">
                                    <!--Droite-->
                                        <span>Vous n'êtes pas encore inscript ?</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>

                                        <button name="inscription" class="btn btn-success">S'inscrire</button>
                                        <label  class="text-center" for="inscription">
                                            <a href="/"  title="plus d'information sur les modalitées d'inscription">Plus d'information</a>
                                        </label>
                                    </form> 
                                </div>
                            </div>
                            <!--STORE-->
                            <li class="nav-item col-2 pl-sm-2 pl-xs-0">
                                <a class="nav-link active" href="/">
                                    <img title="boutique de Village Green" src="<?= base_url('assets/img/').'picto panier.png'?>" alt="boutique">
                                </a>
                            </li>
                            <!--menue bootstap lang-->
                            <li class="nav-link col-2 pl-2">
                                <img title="choisir sa langue" src="<?= base_url('assets/img/').'picto pays.png'?>" alt="choisir sa langue">
                            </li>
                        </ul>
                    </nav>

                    <nav class="navbar navbar-expand-sm navbar-dark secondNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active col-xs-3"><a class="nav-link" href="">Produits</a></li>
                            <li class="nav-item active col-xs-3"><a class="nav-link" href="">Service</a></li>
                            <li class="nav-item active col-xs-3"><a class="nav-link" href="">Aide</a></li>
                            <li class="nav-item active col-xs-3"><a class="nav-link" href="">A propos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
                    <!--3eme menus avec modal-->
                    <div class="row">
                    <nav class="navbar navbar-expand-xl navbar-dark thirdNav col-xl-12">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">

                                <div class="dropdown nav-link">
                                    <button type="button" data-toggle="dropdown">Guit/Basse
                                    <span class="void"></span></button>
                                    <ul class="dropdown-menu col-md-1">
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Guitares Electriques">Guitares Electriques</a></li>
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Guitares classiques">Guitares classiques</a></li>
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Guitares Acoustiques & Electro-Acoustiques">Guitares Acoustiques et Electro-Acoustiques</a></li>
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Basses Electriques">Basses Electriques</a></li>
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Basses Acoustiques">Basses Acoustiques</a></li>
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Basses Semi-Acoustiques">Basses Semi-Acoustiques</a></li>
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Ukulélés">Ukulélés</a></li>
                                        <li class="nav-item active "><a class="drop-link" href="/" title="Autres instruments à cordes pincées">Autres instruments à cordes pincées</a></li>
                                    </ul>
                                </div>    
                                <li class="nav-item active col-xs-1"><a class="nav-link" href="">Batteries</a></li>
                                <li class="nav-item active col-xs-1"><a class="nav-link" href="">Clavier</a></li>
                                <li class="nav-item active col-xs-1"><a class="nav-link" href="">Studio</a></li>
                                <li class="nav-item active col-xs-1"><a class="nav-link" href="">Eclairage</a>  </li>
                                <li class="nav-item active col-xs-1"><a class="nav-link" href="">DJ</a></li>
                                <li class="nav-item active col-xs-1"><a class="nav-link" href="">Cases</a></li>
                                <li class="nav-item active col-xs-1"><a class="nav-link" href="">Accessoires</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
        </div>
    </div>
</header>