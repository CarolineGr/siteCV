<?php require_once 'debutNav.inc.php'; ?>

<div class="container">
    <!-- formulaire de redirection -->
    <form action="navigation.traitement.php" method="POST"> 
        <div class="row">
            <div class="col-lg-offset-5 col-lg-3 col-md-offset-5 col-md-3 col-sm-offset-4 col-sm-3 col-xs-offset-4 col-xs-3">
                <button type="submit" class="btn btn-info btn-lg animated bounceInDown" name="parcours" id="parcours">Parcours</button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4 col-xs-offset-3 col-xs-4">
                <button type="submit" class="btn btn-primary btn-lg animated bounceInRight" name="competences" id="competences">Compétences </button>   
            </div>
            <div class="col-lg-offset-9 col-lg-3 col-md-offset-9 col-md-3 col-sm-offset-8 col-sm-3 col-xs-offset-4 col-xs-3">
                <button type="submit" class="btn btn-primary btn-lg animated bounceInLeft" name="diplomes" id="diplomes">Diplômes</button>
            </div>        
        </div>

        <div class="row">  
            <img id="portrait" class="img-responsive center-block animated rotateIn" src="../bootstrap/img/caro (2).png" alt="photo de Caroline Grimault">
        </div>

        <div class="row">
            <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4 col-xs-offset-4 col-xs-3">
                <button type="submit" class="btn btn-info btn-lg animated bounceInDown" name="loisirs" id="loisirs">Loisirs</button>
            </div>
            <div class="col-lg-offset-9 col-lg-3 col-md-offset-9 col-md-3 col-sm-offset-8 col-sm-3 col-xs-offset-2 col-xs-4">
                <button type="submit" class="btn btn-info btn-lg animated bounceInDown" name="ficheTech" id="ficheTech">Questions/Réponses rapides</button>
            </div>        
        </div>

        <div class="row">
            <div class="col-lg-offset-5 col-lg-3 col-md-offset-4 col-md-3 col-sm-offset-4 col-sm-3 col-xs-offset-4 col-xs-3">
                <button type="submit" class="btn btn-primary btn-lg animated bounceInDown" name="retour" id="retour">Retour</button>
            </div>
        </div>
    </form>   
</div>

<?php require_once './fin.inc.php'; ?>