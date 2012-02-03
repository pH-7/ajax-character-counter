<?php
require 'inc/functions.php';

$sText = (isset($_POST['characters'])) ? $_POST['characters'] : '';

$sTxt = strlen($sText);
$sTxtWithoutSpaces =  strlen(strip_spaces($sText));
$sSpaces = ($sTxt-$sTxtWithoutSpaces);
$sWord = str_word_count($sText);
$sSentence = sentenceCount($sText);

echo t('<ul>
<li>Votre texte comporte :</li>
<li>%0% cararctères <em>avec les espaces</em>.</li>
<li>%1% caractères <em>sans les espaces</em>.</li>
<li>%2% <em>espaces</em>.</li>
<li>%3% <em>mots</em>.</li>
<li>%4% <em>phrases</em>.</li>
</ul>', $sTxt, $sTxtWithoutSpaces, $sSpaces, $sWord, $sSentence);
