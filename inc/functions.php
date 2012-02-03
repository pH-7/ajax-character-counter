<?php

function strip_spaces($sText) {
	return str_replace(array("\r\n","\r","\s","\t","\n","\s\r\n\t",' ','  ','   ','    ','     ','      '), '', $sText);
}

function sentenceCount($sText) {
  return preg_match_all('/(?:[\w,]+[\s]?)(\.|\!|\?)(?!\w)/', $sText, $aMatch);
}

function t($sToken, $sArg0 = '', $sArg1 = '', $sArg2 = '', $sArg3 = '', $sArg4 = '') {
	   $sToken = str_replace('%0%', $sArg0, $sToken);
       $sToken = str_replace('%1%', $sArg1, $sToken);
	   $sToken = str_replace('%2%', $sArg2, $sToken);
	   $sToken = str_replace('%3%', $sArg3, $sToken);
	   $sToken = str_replace('%4%', $sArg4, $sToken);
		    
	   //return gettext($sToken); // We do not yet have the translation mode
	   return $sToken;
}
