<?php
if(!function_exists('mb_strlen'))
    exit('Please install the "mbstring" PHP module.');

require 'inc/functions.php';

$sText = (isset($_POST['characters'])) ? $_POST['characters'] : '';

$sTxt = mb_strlen($sText, ENCODING);
$sTxtWithoutSpaces =  mb_strlen(strip_spaces($sText), ENCODING);
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
