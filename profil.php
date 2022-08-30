<?php

// je recupere tous ce qui a été initialisé dans init.php avec en plus tout ce qui a été codé dans fonction.php
require_once('include/init.php');

if (!internauteConnecte()) {

    header('location: ' . URL . 'connexion.php');
}

if (isset($_GET['action']) && $_GET['action'] == 'valisate') {
    $validate .= '<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    Félicitations <strong>' . $_SESSION['membre']['pseudo'] . '</strong>, vous etes connecté 😉 !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
}

//je récupère en bas du passage php le header, dont le CDN Bootstrap

require_once('include/header.php');

?>

<h2 class="text-center my-5">
    <div class="badge badge-dark text-wrap p-3">Bonjour <?= (internauteConnecteAdmin()) ? $_SESSION['membre']['pseudo'] . ", vous tes admin du site" : $_SESSION['membre']['pseudo']  ?> </div>
</h2>

<?= $validate ?>

<!-- $validate .='<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    Félicitations <strong>' . $_SESSION['membre']['pseudo'] .'</strong>, vous etes connecté 😉 !
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>'; -->



<div class="row justify-content-around py-5">
    <div class="col-md-3 text-center">
        <ul class="list-group">
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><?= $_SESSION['membre']['prenom'] ?></li>
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><?= $_SESSION['membre']['nom'] ?></li>
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><?= $_SESSION['membre']['email'] ?></li>
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><?= $_SESSION['membre']['adresse'] ?></li>
        </ul>
    </div>
</div>
<?php require_once('include/footer.php');
