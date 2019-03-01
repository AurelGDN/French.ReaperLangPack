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
      array('annulation','undo',$x),
      array('annuler','undo',$x),
      array('mesure', 'meter',$x),
      array(' mètre', 'meter',$x),
      array('matrice de routage','routing matrix',$x),
      array('matrice de groupe','grouping matrix',$x),
      array('matrice d\'export','render matrix',$x),
      array('matrice d\'export de région','region render matrix',$x),
      array('piste','track',$x),
      array('par lots','batch',$x),
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
      array('surpasser','latch',$x),
      array('ajuster/lire','trim/read',$x),
      array('écrire','write',$x),
      array('export mono','render',$x),
      array('export multicanal','render',$x),
      array('export stéréo','render',$x),
      array('muter/démuter','toggle',$x),
      array('sous-projet','subproject',$x),
      array('supprimer','remove',$x),
      array('disposition','layout',$x),
      array('vue','view',$x),
      array('sélect','select',$x),
      array('verrou','lock',$x),
      array('précédente','previous',$x),
      array('suivante','next',$x),
      array('zoom avant','zoom in',$x),
      array('zoom arrière','zoom out',$x),
      array('gauche','left',$x),
      array('droit', 'right',$x),
      array('hauteur de la prise', 'pitch',$x),
      array('hauteur de l\'objet', 'pitch',$x),
      array('recherche de lecture lente', 'smooth seek',$x),
      array('défilement', 'scroll',$x),
      array('vignettes', 'label',$x),
      array('notes fantômes', 'trailing note',$x),
      array('bourse', 'pool',$x),
      array('timebase', 'base temporelle',$x),
      array(' forme ', 'shape',$x),
      array('repères média', 'cues',$x),
      array('envoi', 'send',$x),
      array('défiler', 'scroll',$x),
      array('défilement', 'scroll',$x),
      array('retours', 'receive',$x),
      array('réglage de fenêtre', 'screenset',$x),
      array('réglage', 'settings',$x),
      array('bande', 'lane',$x),
      array('fréquence de trames', 'framerate',$x),
      array('définir', 'set',$x),
      array('régler', 'set',$x),
      array('afficher', 'display',$x),
      array('modifieurs de souris', 'mouse modifier',$x),
      array('modifieur de souris', 'mouse modifier',$x),
      array('métronome', 'metronome',$x),
      array('baisser le volume', 'nudge',$x),
      array('augmenter le volume', 'nudge',$x),
      array('positionnement libre', 'free items positionning',$x),
      array('arrière plan', 'background',$x),
      array('règle', 'ruler',$x),
      array('restaurer', 'redo',$x),
      array('lignes de grille', 'gridlines',$x),
      array('signature rythmique', 'time signature',$x),
      array('arrangement', 'arrange',$x),
      array('verrouiller/déverrouiller', 'toogle',$x),
      array('élastique', 'stretch',$x),
      array('réinitialiser', 'reset',$x),
      array('crête', 'peak',$x),
      array('échelloner', 'scale',$x),
      array('préréglage', 'preset',$x),
      array('ajustement', 'trim',$x),
      array('intervertir', 'swap',$x),
      array('réduire', 'reduce',$x),
      array('modifier', 'edit',$x),
      array('inverser', 'reverse',$x),
      array('copier', 'copy',$x),
      array('coller', 'paste',$x),
      array('propager', 'propagate',$x),
      array('multicanal', 'multichannel',$x),
      array('canal', 'channel',$x),
      array('normaliser', 'normalize',$x),
      array('couloir', 'lane',$x),
      array('pré-écoute "Surpasser"', 'latch-preview',$x),
      array('en ligne"', 'inline',$x),
      array('E/S', 'I/O',$x),
      array('armer/désarmer', 'toggle',$x),
      array('empêcher', 'prevent',$x),
      array('quantifier', 'quantize',$x),
      array('courbe de tempo', 'tempo map',$x),
      array('sous-enveloppe', 'underlying',$x),
      array('déplacement', 'moving',$x),
      array('déplacer', 'move',$x),
      array('préserver', 'preserve',$x),
      array('ligne de zéro', 'baseline',$x),
      array('chaloupé', 'swing',$x),
      array('diviser', 'divide',$x),
      array('écrire', 'write',$x),
      array('Config de scène', 'Live Config',$x),
      array('hors ligne', 'offline',$x),
      array('en ligne', 'online',$x),
      array('modèle de piste', 'track template',$x),
      array('enclancher', 'trigger',$x),
      array('factice', 'dummy',$x),
      array('icône', 'icon',$x),
      array('port', 'slot',$x),
      array('actions personalisées', 'custom actions',$x),
      array('action personalisée', 'custom action',$x),
      array('purger', 'flush',$x),
      array('arrêt', 'stop',$x),
      array('plan Z', 'Z line order',$x),
      array('affecter', 'set',$x),
      array('définir', 'set',$x),
      array('régler', 'set',$x),
      array('entrée', 'input',$x),
      array('sortie', 'output',$x),
      array('charger', 'load',$x),
      array('précharger', 'reload',$x),
      array('ajustement', 'trim',$x),




















      );





    foreach ($tag as $key) {
        $x =  S::create($line)->containsAny([$key[0]], false);

        if ($x === true) {
            $line= S::create($line)->append('['.$key[1].'] ');
        } else {
            $line=  S::create($line)->append('');
        }
    }

    echo $line.'<br>';
}
