<?php

if(isset($_POST["parcours"])){
    header("Location: parcours.php");
    exit;
}elseif(isset($_POST["competences"])){
    header("Location: competences.php");
    exit;
}elseif(isset($_POST["diplomes"])){
    header("Location: diplomes.php");
    exit;
}elseif(isset($_POST["loisirs"])){
    header("Location: loisirs.php");
    exit;
}elseif(isset($_POST["ficheTech"])){
    header("Location: ficheTechnique.php");
    exit;
}elseif(isset($_POST["retour"])){
    header("Location: index.php");
    exit;
}else{
    ?><script>history.back()</script><?php        
}