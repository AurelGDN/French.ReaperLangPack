<?php

require 'vendor/autoload.php';
use Stringy\Stringy as S;

$file_lines = file("action.txt");

foreach ($file_lines as $line) {
    $x=null;

    $tag = array(

    array('molette de souris', 'mousewheel',$x),
    array('nouveau','new',$x),
    array('sauver','save',$x),
    array('répertoire','path',$x),
    array('onglet', 'tab',$x),
    array('faire un export','render',$x),
    array('enregistrement','recording',$x),
    array('enregistrer','record',$x),
    array('magnétisme','snap',$x),
    array('grille','grid',$x),
    array('verrouillage','lock',$x),
    array('objet','item',$x),
    array('édition par glissement','ripple edit',$x),
    array('fondus enchaînés','crossfade',$x),
    array('fondu enchaîné','crossfade',$x),
    array('activer/désactiver','toggle',$x),
    array('rognage','trim',$x),
    array('rogner','trim',$x),
    array('scission','split',$x),
    array('scinder','split',$x),
    array('fondu d\'entrée','fade in',$x),
    array('forme','shape',$x),
    array('fondu de sortie','fade out',$x),
    array('annul','undo',$x),
    array('mesure', 'meter',$x),
    array(' mètre', 'meter',$x),
    array('matrice de routage','routing matrix',$x),
    array('matrice de groupe','grouping matrix',$x),
    array('matrice d\'export','render matrix',$x),
    array('piste','track',$x),
    array('par lots','batch',$x),
    array('crêtes','peaks',$x),
    array('rangée','lane',$x),
    array('prise','take',$x),
    array('file d\'attente des exports','render queue',$x),
    array('préférences','settings',$x),
    array('afficher/cacher','toggle',$x),
    array('grosse horloge','big clock',$x),
    array('écran','screen',$x),
    array('gestionnaire','manager',$x),
    array('région','region',$x),
    array('enveloppe','envelope',$x),
    array('marqueur','marker',$x),
    array('console de projet','project bay',$x),
    array('projet','project',$x),
    array('clavier virtuel MIDI','keyboard',$x),
    array('navigateur','browser',$x),
    array('écoute','monitoring',$x),
    array('chaîne','chain',$x),
    array('afficher','show',$x),
    array('limier','finder',$x),
    array('thème','theme',$x),
    array('développement de thème','tweak',$x),
    array('curseur de souris','mouse cursor',$x),
    array('lecture','play',$x),
    array('aller','go',$x),
    array('transitoire','transient',$x),
    array('bord ','edge',$x),
    array('vitesse de lecture','playrate',$x),
    array('augmenter','increase',$x),
    array('diminuer','decrease',$x),
    array('sélection temporelle','time selection',$x),
    array('sauter','skip',$x),
    array('rembobiner','rewind',$x),
    array('avance rapide','forward',$x),
    array('mesure','measure',$x),
    array('battement','beat',$x),
    array('démarrer/arrêter','toggle',$x),
    array('début','start',$x),
    array('fin ','end',$x),
    array('boucle','loop',$x),
    array('répéter','repeat',$x),
    array('recherche','seek',$x),
    array('déplacer','move',$x),
    array('signature rythmique','time signature',$x),
    array('en avant','forward',$x),
    array('en arrière','back',$x),
    array('mosaïque','comp',$x),
    array('pousser','nudge',$x),
    array('barre d\'outils','toolbar',$x),
    array('pré-défilement','pre-roll',$x),
    array('métrage ','metering',$x),
    array('ouvrir','open',$x),
    array('fichier','file',$x),
    array('toucher','touch',$x),
    array('lire','read',$x),
    array('Surpasser','latch',$x),
    array('ajuster/lire','trim/read',$x),
    array('ecrire','write',$x),
    array('export mono','render',$x),
    array('export multicanal','render',$x),
    array('export stéréo','render',$x),
    array('Supprimer','remove',$x),
    array('Muter/Démuter','toggle',$x),
    array('sous-projet','subproject',$x),
    array('supprimer','remove',$x),
    array('disposition','layout',$x),
    array('vue','view',$x),
    array('sélectionner','select',$x),
    array('verrou','lock',$x),
    array('précédente','previous',$x),
    array('suivante','next',$x),
    array('zoom avant','zoom in',$x),
    array('zoom arrière','zoom out',$x),
    array('left','gauche',$x),
    array('right', 'droit',$x),
    array('hauteur de la prise', 'pitch',$x),
    array('hauteur de l\'objet', 'pitch',$x),


















  );

    foreach ($tag as $key) {
        $x =  S::create($line)->containsAny([$key[0]],false);

        if ($x === true) {
            $line= S::create($line)->append('#'.$key[1].' ');
        } else {
            $line=  S::create($line)->append('');
        }
    }

    echo $line.'<br>';
}
