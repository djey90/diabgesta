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



        <section class="contact">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" action="contact.php" class="formC">

                        <label for="" class="intitu">Nom <span class="asthCont">*</span></label>
                        <input type="text" placeholder="Votre nom" required>

                        <label for="" class="intitu">Adresse mail <span class="asthCont">*</span></label>
                        <input type="text" placeholder="Votre email" required>

                        <label for="" class="intitu">Objet <span class="asthCont">*</span></label>
                        <input type="text" placeholder="Votre objet" required>

                        <label for="" class="intitu">Message <span class="asthCont">*</span></label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Votre message" required></textarea>

                        <button type="submit" class="btn" value="sumit">Envoyer</button>
                        <p class="champs"> <span class="asthCont">*</span> Champs obligatoires</p>
                    </form>
                </div>
            </div>
        </section>



        <section class="socialNetwork">
            <div class="row">
                <div class="col-md-12">
                    <div class="titleSocial">
                        <h2 class="text-center">Nos réseaux sociaux</h2>
                        <p>Restons connecter afin d'échanger, de partager ou seulement afin de nous rassurer !</p>
                    </div>

                    <div class="col-md-4">
                        <div class="fb">
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="insta">
                            <a href=""><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="tw">
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                        </div>
                    </div>



                </div>
            </div>
        </section>


    </div>


    <?php require_once('../inc/footer.inc.php'); ?>