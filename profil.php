<?php

// je recupere tous ce qui a été initialisé dans init.php avec en plus tout ce qui a été codé dans fonction.php
require_once('include/init.php');

// code

//je récupère en bas du passage php le header, dont le CDN Bootstrap

require_once('include/header.php');

?>

<h2 class="text-center my-5">
    <div class="badge badge-dark text-wrap p-3">Bonjour </div>
</h2>



<!-- $validate .= '<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    Félicitations <strong>' . $_SESSION['membre']['pseudo'] .'</strong>, vous etes connecté 😉 !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'; -->



<div class="row justify-content-around py-5">
    <div class="col-md-3 text-center">
        <ul class="list-group">
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"></li>
        </ul>
    </div>
</div>
<?php require_once('include/footer.php');
