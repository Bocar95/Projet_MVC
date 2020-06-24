<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acceuil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style-acceuil.css">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/bootstrap.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
             integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
              crossorigin="anonymous">
    </script>
</head>
<body>

    <div class="container-fluid" id="container-fluid">

        <div class="row">
            <article class="col-md">
                <div class="cadre">
                    <a href="enregistrerChambre" class="cadre-lien-image" id="link_enregistrer_chambre">
                        <p>Enregistrer chambre</p>
                        <img src="<?=BASE_URL?>/public/images/ic-ajout.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="cadre">
                    <a href="enregistrerEtudiant" class="cadre-lien-image" id="link_enregistrer_etudiant">
                        <p>Enregistrer etudiant</p>
                        <img src="<?=BASE_URL?>/public/images/ic-ajout-active.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="cadre">
                    <a href="gestionChambre" class="cadre-lien-image" id="link_gestion_chambre">
                        <p>Gestion chambre</p>
                        <img src="<?=BASE_URL?>/public/images/ic-liste.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="cadre">
                    <a href="gestionEtudiant" class="cadre-lien-image" id="link_gestion_etudiant">
                        <p>Gestion etudiant</p>
                        <img src="<?=BASE_URL?>/public/images/ic-liste-active.png" alt="">
                    </a>
                </div>
            </article>
        </div>

        <div class="container">
            <!-- On affiche ici les views -->
            <?php echo  $content_for_layout?>
        </div>

    </div>

    
</body>
</html>
