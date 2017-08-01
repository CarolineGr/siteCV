<?php include_once './debutLoisirs.inc.php'; ?>

             

<div class="container">
    <!-- retour -->
    <div class="row">
        <div class="col-lg-offset-10 col-lg-2 col-md-2 col-sm-3 col-xs-6">            
            <h2 class="h2"><a href="navigation.php">Retour</a></h2>
        </div>
    </div>
    
    <!-- Titre loisirs -->
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 text-center">
            <h1>Loisirs</h1>
        </div>
    </div>

    
    <section>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div id="cartes1" class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                    <p class="text-center" style="background-color: black;border: 3px blue ridge;" id="sport"></p>   
                    <img id="sport" alt="carte à jouer" class="img-responsive animated bounceIn" src="jeu/1.png" id="carte1" onclick="document.images[0].src=img1.src;document.getElementById('sport').innerHTML=lien;">
                </div>

                <div id="cartes" class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-3 col-xs-3">
                    <p class="text-center" style="background-color: black;border: 3px blue ridge;" id="voyage"></p>  
                    <img alt="carte à jouer" class="img-responsive animated bounceIn" src="jeu/2.png" id="carte2" onclick="document.images[1].src=img2.src;document.getElementById('voyage').innerHTML=lien2;">
                </div>

                 <div id="cartes" class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-3 col-xs-3">
                    <p class="text-center" style="background-color: black;border: 3px blue ridge;" id="jeux"></p> 
                    <img alt="carte à jouer" class="img-responsive animated bounceIn" src="jeu/3.png" id="carte3" onclick="document.images[2].src=img3.src;document.getElementById('jeux').innerHTML=lien3;">
                </div>

                <div id="cartes" class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-3 col-xs-3">
                    <p class="text-center" style="background-color: black;border: 3px blue ridge;" id="musique"></p> 
                    <img alt="carte à jouer" class="img-responsive animated bounceIn" src="jeu/4.png" id="carte4" onclick="document.images[3].src=img4.src;document.getElementById('musique').innerHTML=lien4;">
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="center-block">
            <br><p class="text-center">Cliquez sur les cartes<p><br>
        </div>
    </div>    

</div>

<script>
    var lien = "<a  href='./loisirsSport.php'>SPORT</a>";
    var lien2 = "<a href='./loisirsVoyage.php'>VOYAGES</a>";
    var lien3 = "<a href='./loisirsJeux.php'>JEUX</a>";
    var lien4 = "<a href='./loisirsMusique.php'>MUSIQUE</a>";
    
    

    img1 = new Image();
    img1.src='./jeu/1.jpg';
    img2 = new Image();
    img2.src='./jeu/2.jpg';
    img3 = new Image();
    img3.src='./jeu/3.jpg';
    img4 = new Image();
    img4.src='./jeu/4.jpg';
    
</script>

<?php include_once './fin.inc.php'; ?>