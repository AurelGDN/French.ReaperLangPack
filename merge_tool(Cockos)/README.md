source https://landoleet.org/i8n/


Note: to test, grab a langpack file from sample_packs (lower case is the least offensive, proably).

    Make a directory:

          ~/Library/Application Support/REAPER/LangPack

    or

          C:\Users\myusername\AppData\Roaming\REAPER\LangPack

    or (wherever your reaper.ini file lives)/LangPack
    Put the sample langpack file in there, such as "lower.txt"
    Run REAPER, if it does not prompt for language, go to Prefs/General and choose one there. 

Notes on localizing:
Currently only REAPER itself and the MIDI editor support localization, though other things will soon.

To make a new language, copy the file "template.txt" to a new name, and edit it. You should change the #NAME: line at the start to be accurate. As you translate a line, remove the ; (or ;^) to make it active.

The section "common" has strings that are used in one or more other sections. You can customize them there, or if the different contexts need different translations, they now have lines that begin with ;^, which if you remove the ;^, you can override.

If you started from an earlier version of template.txt, you can use the merge tool to merge in new updates -- run from a command prompt or terminal:

  merge_langpacks new_template.txt mylanguage.txt > newlanguage.txt

Once you do this, inspect newlanguage.txt to make sure things look right, look for lines that have #######, which will tell you if things were added or removed.

Many dialog controls will automatically size up to fit longer content, although currently it is still constrained by the total space available.

The localization files are read as UTF-8 by default, although if there is no BOM and non-UTF8 character sequences are found it will be read as ANSI, or if it has UTF-16 BOM it will be read as UTF-16.

There are two stickies in the pre-release forum to discuss this; one is for if you find things that are broken due to localization, i.e. crashes, bad performance, etc, and the other thread is a discussion for people doing localizations, i.e. if there are problems or things that could make the (quite tedious) task easier. 
