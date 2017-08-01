<?php include_once './debutIndex.inc.php'; ?>

        <div class="container">
            <!-- En-tête -->
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="h1 animated bounceInRight">Caroline GRIMAULT</h1>
                    <h2 class="h2 animated rotateInDownLeft">Développeuse informatique</h2>
                    <h2 class="h2 animated rotateInDownLeft">PHP, JAVA</h2>
                    <h2><a href="https://www.linkedin.com/in/caroline-grimault-353aa3129/" target="_blank" style="color: #999999;font-size: 0.8em;font-family: 'Lemonada', cursive, arial, sans-serif;">Profil LinkedIn</a></h2>
                </div>
            </div> 
            
            <div class="row">    
                <div class="col-lg-offset-6 col-lg-5 col-md-offset-5 col-md-6 col-sm-offset-4 col-sm-8">
                    <img alt="bonhommes qui cherchent leur route devant panneau de direction" src="../projetCV/bootstrap/img/bonhommePanneauDirectionSansFond.png">
                </div>
            </div>
            
            <!-- boutons de direction -->
            <div class="row">
                <div class="col-lg-offset-6 col-lg-6 col-md-offset-5 col-md-6 col-sm-offset-4 col-sm-8">
                    <form action="index.traitement.php" method="POST">
                        <button type="submit" class="btn btn-primary btn-lg" name="cv" id="cv">Mon CV en .pdf</button>

                        <button type="submit" class="btn btn-primary btn-lg" name="suite" id="suite">Me découvrir autrement</button>
                    </form>
                </div>
            </div>
        </div>
       
      

<?php include_once 'fin.inc.php'; ?>