<?php include_once './debutParcours.inc.php'; ?>


<div class="container">
    <form action="navigation.php" method="POST">
        <!-- retour -->
        <div class="row">
            <div class="col-lg-push-10 col-lg-2">            
                <button type="submit" class="btn btn-primary btn-lg" name="retour" id="retour">Retour</button>
            </div>
        </div>

        <!-- titre parcours -->
        <div class="row">
            <div class="col-lg-offset-1 col-lg-6">
                <h1 class="h1 center-block">Mon Parcours...</h1>
            </div>
        </div>

        <!-- contenu -->
        <div class="row">
            <div class="col-lg-offset-3 col-lg-8">
                <h2>Du 12 avril 1980 à juillet 1998</h2>
                <p>Naissance, puis viennent les années de scolarité obligatoire (et plus) se ponctuant par le baccalauréat. 
                    J'avais hâte d'en finir pour passer à des enseignements plus en adéquation avec mon futur
                    métier. Adieu ô matières inuti... hum, disons moins pertinentes !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-3 col-lg-8">
                <h2>De 1998 à 2016</h2>
                <p>Première partie de ma vie professionnelle avec plusieurs diplômes et certifications
                    dans le domaine de l'orthopédie. Un métier formidable où on donne autant qu'on reçoit (à y réfléchir, 
                    ça dépend des patients...<img alt="" src="../projetCV/bootstrap/img/smiley.png">), je réalisais toutes sortes d'appareillages pour des personnes 
                    handicapées physiques. Ce métier demande d'être patient, s'adapter, trouver des 
                    solutions et les bons mots, faire preuve d'imagination,... Des Mc Gyver en puissances ces ortho !</p>
                <p>J'ai dû être mobile pour trouver du travail, j'ai ainsi eu des postes en région parisienne, à Valenciennes,
                à Caen, à Niort/Poitiers et à Lausanne en Suisse.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-3 col-lg-8">
                <h2>De 2016 à 2017</h2>
                <p>Reprise d'étude dans un tout autre domaine : la programmation informatique. Ce fut une année
                rude. D'abord, car reprendre des études sur le tard (il y a un gène dans ma famille mais quand même), puis, 
                challenge d'obtenir un BTS en une année. Je vous assure qu'il faut être dingue pour se lancer dans
                un truc pareil ; dingue et sacrément motivé. J'ai réussi et maintenant je n'aspire qu'à retourner 
                travailler. J'espère que de belles opportunités s'offriront à moi.</p>
            </div>
        </div>

        <!-- retour -->
        <div class="row">
            <div class="col-lg-push-10 col-lg-2">            
                <button type="submit" class="btn btn-primary btn-lg" name="retour" id="retour">Retour</button>
            </div>
        </div>
    </form>
</div>



<?php include_once './fin.inc.php'; ?>