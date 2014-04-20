<?php
/**
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2014, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 */

define('ENCODING', 'utf-8');

function strip_spaces($sText)
{
    return str_replace(array("\r\n","\r","\s","\t","\n","\s\r\n\t",' ','  ','   ','    ','     ','      '), '', $sText);
}

function sentenceCount($sText)
{
    return preg_match_all('/(?:[\w,]+[\s]?)(\.|\!|\?)(?!\w)/', $sText, $aMatch);
}

function t($sToken, $sArg0 = '', $sArg1 = '', $sArg2 = '', $sArg3 = '', $sArg4 = '')
{
    //$sToken = gettext($sToken); // We don't yet have the translation mode
    $aSearch = array('%0%', '%1%', '%2%', '%3%', '%4%');
    $aReplace = array($sArg0, $sArg1, $sArg2, $sArg3, $sArg4);
    return str_replace($aSearch, $aReplace, $sToken);
}
