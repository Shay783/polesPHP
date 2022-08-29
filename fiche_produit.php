<?php

// je recupere tous ce qui a été initialisé dans init.php avec en plus tout ce qui a été codé dans fonction.php
require_once('include/init.php');

// code

//je récupère en bas du passage php le header, dont le CDN Bootstrap

require_once('include/header.php');

?>
</div>

<div class="container-fluid">
    <div class="row">
        <!-- debut de la colonne qui va afficher les categories -->
        <div class="col-md-2">

            <div class="list-group text-center">

                <a class="btn btn-outline-success my-2" href=""></a>

            </div>

        </div>
        <!-- fin de la colonne catégories -->
        <div class="col-md-8">

            <h2 class='text-center my-5'>
                <div class="badge badge-dark text-wrap p-3">Fiche du produit </div>
            </h2>

            <div class="row justify-content-around text-center py-5">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">
                            <div class="badge badge-dark text-wrap"></div>
                        </h3>
                        <p class="card-text"></p>
                        <!-- ------------------- -->
                        <form method="POST" action="">

                            <label for="">J'en achète</label>
                            <select class="form-control col-md-5 mx-auto" name="" id="">
                                <!-- ----------- -->
                                <option class="bg-dark text-light" value=""></option>
                                <!-- ----------- -->
                            </select>
                            <button type="submit" class="btn btn-outline-success my-2" name="ajout_panier" value="ajout_panier"><i class="bi bi-plus-circle"></i> Panier <i class="bi bi-cart3"></i></button>
                        </form>
                        <!-- ----------- -->
                        <p class="card-text">
                        <div class="badge badge-danger text-wrap p-3">Produit en rupture de stock</div>
                        </p>
                        <!-- ------------ -->

                        <p><a href="">Voir tous les modèles</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <?php require_once('include/footer.php');
