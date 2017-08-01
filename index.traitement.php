<?php

if(isset($_POST["cv"])){
    header("Location: ../projetCV/bootstrap/docs/2017_Caroline_Grimault_CV_Developpeur.pdf");
    exit;
}elseif(isset($_POST["suite"])){
    header("Location: navigation.php");
    exit;
}else{
    ?><script>alert("Erreur de chargement. Vous serez redirigé vers l'accueil du site."); window.location.href="index.php";</script><?php        
}