<?php require_once('../inc/entete.inc.php'); ?>
<?php require_once('../inc/header.inc.php'); ?>



<div class="imgTopcont"></div>
</header>

<body>
    <div class="container">
        <section class="titleCont">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                </div>
            </div>
        </section>
    </div>


    <div class="container">
        <section class="contact">
            <div class="row">
                <div class="col-md-12">

                    <form action="../controllers/PostContact.php" method="POST" class="formC">

                        <label for="inputName" class="intitu">Nom <span class="asthCont">*</span></label>
                        <input type="text" name="nom" id="inputName" placeholder="Votre nom" required>


                        <label for="inputMail" class="intitu">Adresse mail <span class="asthCont">*</span></label>
                        <input type="text" name="mail" id="inputMail" placeholder="Votre email" required>


                        <label for="inputObjet" class="intitu">Objet <span class="asthCont">*</span></label>
                        <input type="text" id="inputObjet" name="objet" placeholder="Votre objet" required>

                        <label for="inputMsg" class="intitu">Message <span class="asthCont">*</span></label>
                        <textarea name="msg" id="inputMsg" cols="30" rows="10" placeholder="Votre message" required></textarea>

                        <button type="submit" name="envoi" class="btn">Envoyer</button>
                        <p class="champs"> <span class="asthCont">*</span> Champs obligatoires</p>
                    </form>
                </div>
            </div>

        </section>



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





    <?php require_once('../inc/footer.inc.php'); ?>