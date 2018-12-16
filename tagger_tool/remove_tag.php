<?php

$file_lines = file("action.txt");

foreach ($file_lines as $line) {
    if (strlen($line) > 20) {
        $no_brace= preg_replace('/[\[].*[\]]/U', '', $line);

        $cleaned_line= str_ireplace("(Nudge)", "", $no_brace);

        echo $cleaned_line. "<br>" ;
    } else {
        echo $line."<br>";
    }
}
