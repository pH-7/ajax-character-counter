<?php
/**
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2014, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 */

if(!function_exists('mb_strlen'))
    exit('Please install the "mbstring" PHP module.');

require 'inc/functions.php';

$sText = (isset($_POST['characters'])) ? $_POST['characters'] : '';

$iText = mb_strlen($sText, PH7_ENCODING);
$iTextWithoutSpace =  mb_strlen(strip_spaces($sText), PH7_ENCODING);
$iSpace = ($iText-$iTextWithoutSpace);
$iWord = str_word_count($sText);
$iSentence = sentence_count($sText);
$aReadingTime = reading_time($sText);

echo t('<ul>
<li>Votre texte comporte :</li>
<li>%0% cararctères <em>avec les espaces</em>.</li>
<li>%1% caractères <em>sans les espaces</em>.</li>
<li>%2% <em>espaces</em>.</li>
<li>%3% <em>mots</em>.</li>
<li>%4% <em>phrases</em>.</li>
<li>%5% min, %6% sec de <em>temps de lecture</em>.</li>
</ul>', $iText, $iTextWithoutSpace, $iSpace, $iWord, $iSentence, $aReadingTime['min'], $aReadingTime['sec']);
