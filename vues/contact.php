<?php require_once('../inc/entete.inc.php'); ?>
<?php require_once('../inc/header.inc.php'); ?>



<div class="imgTopcont"></div>
</header>

<?php
session_start();

include '../inc/_inc.php';
?>



<body>
    <div class="container-fluid">
        <section class="titleCont">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                </div>
            </div>
        </section>
    </div>





    <div class="container">
        <div class="starter-template contact">

            <?php if (array_key_exists('success', $_SESSION)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php implode('<br>', $_SESSION['errors']); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <?php endif; ?>

                    <?php if (array_key_exists('success', $_SESSION)) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Votre message a bien été envoyé
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <form action="../controllers/post_controller.php" method="POST" class="formC">

                        <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <?= $form->text('nom', 'Votre nom') ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?= $form->text('mail', 'Votre e-mail') ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?= $form->text('objet', 'Votre objet') ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?= $form->textarea('msg', 'Votre message') ?>
                            </div>
                        </div>

                        <button type="submit" class="btn">Envoyer</button>
                    </form>
                </div>
        </div>


        <section class="socialNetwork">
            <div class="row">
                <div class="col-md-12">
                    <div class="titleSocial">
                        <h2 class="text-center">Merci pour votre message !</h2>
                        <p>Nous vous proposons aussi de nous suivre sur nos différents réseaux sociaux.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="fb">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="insta">
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="tw">
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </div>
                </div>



            </div>
    </div>
    </section>

    <?php
    // Nettoyage des données form de contact
    // se met en bas de page
    unset($_SESSION['inputs']);
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
    ?>



    <?php require_once('../inc/footer.inc.php'); ?>