# Langpack_FR_CockosReaper

Répertoire de travail pour la traduction francophone de REAPER Cockos et des extensions SWS

Fichier à modifier:
Travail en cours=>  => WIP_REAPER_SWS_S&M-langpack-francais/REAPER_SWS_590_french.ReaperLangPack

```
https://raw.githubusercontent.com/AurelGDN/Langpack_FR_CockosReaper/master/WIP_REAPER_SWS_S%26M-langpack-francais/REAPER_SWS_590.ReaperLangPack
```

## Contribute / contribuer

  En principe je me charge de générer/actualiser les "template" de langpack fournis par Cockos, la traduction se coordonne en priorité sur le fil du forum officiel http://forum.cockos.com/showthread.php?t=92847
Cependant vous trouverez ici tous les outils nécessaires pour oeuvrer à la génération d'un template de langpack...
En outre, si vous n'avez pas peur de Git, les Pull Requests sont les bienvenues bien sûr. N'hésitez pas à me contacter ici ou ailleurs pour employer nos efforts de façon stratégique (inutile que l'on s'emploi à traduire 2 fois la même string...)
Vous pouvez aussi simplement faire de la relecture et proposer des corrections, améliorations.

#### Le chercher/remplacer est à manipuler avec grande précaution, souvent générateur de problème si vous avez le click facile
#### Ne pas modifier les intitulés de section entre crochets                  ex:  [actions]
#### Ne pas modifier les intitulés de chaîne en début de ligne                 ex: 4A46D7685C3008EB=

Les commentaires de lignes ';' sont des chaînes à traduire
 Les commentaires de lignes ';^' sont des chaînes optionnelles, traduites dans la section [common] à gérer au cas par cas surtout dans l'optique d'optimiser l'affichage à l'écran des chaînes plus longues aprés traduction.

En cas de besoin il existe aussi cette fonction pour redimmensionner certaine fenêtre exemple: 5CA1E00000000000=xsc ysc
à insérer en début de section

[DLG_128] ; IDD_PREFERENCES          
5CA1E00000000000=1.4                 

[DLG_136] ; IDD_PREFS_PLAY
5CA1E00000000000=1.4

Format d'encodage UTF8 ou UTF-16 obligatoire

Page officielle https://www.cockos.com/reaper/langpack/index.php
Filière anglophone: https://forum.cockos.com/showthread.php?p=1481913#post1481913

# GDN_tools

Réalisation de quelques scripts afin de faciliter les manipulations autour de liste d'action => cf tagger_tool: remove tagg, add_tag
L'intéret étant de pouvoir utiliser la liste d'action avec des versions du Langpack plus au moins à jour et une version récente  de REAPER => la mixité Anglais/Français dans la liste d'action peut poser problème au filtrage des actions

Mise à disposition d'un lexique pour comprendre les termes choisis et aussi dans l'optique d'homogéineiser les traductions du LangpackFr

### Contributors / Contributeurs historiques depuis V4.14

#### French - Français

* Neilerua
* Jeffos
* Benf
* Zee Wavesurfer
* Homme Studio
* Transtrans
* Sardonicus
* Reno_thestraws
* Vincent Sermonne
* X-Raym
...

Et plus généralement les participants de ce fil:  
[Interface de REAPER en Français(LangPack Fr)](http://forum.cockos.com/showthread.php?t=92847)









