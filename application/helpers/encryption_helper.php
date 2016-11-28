<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');	
/**
 * Encryption Helpers
 *
 * @author      Ekalaya Manullang
 */
// ------------------------------------------------------------------------

if( ! function_exists('encryption'))
{	
	function encryption($enkrip='')
	{
		$b=0;
		$c="";
		$z=$enkrip;
		$a=strlen($z); 
		for ($i=1; $i<=$a;$i++){
		$d=(substr($z,$b,1));
			switch($d)
				{
				case "A": $d="P";
				break;
				case "B": $d="Q";
				break;
				case "C": $d="R";
				break;
				case "D": $d="S";
				break;
				case "E": $d="T";
				break;
				case "F": $d="U";
				break;
				case "G": $d="V";
				break;
				case "H": $d="W";
				break;
				case "I": $d="X";
				break;
				case "J": $d="Y";
				break;
				case "K": $d="Z";
				break;
				case "L": $d="A";
				break;
				case "M": $d="B";
				break;
				case "N": $d="C";
				break;
				case "O": $d="D";
				break;
				case "P": $d="E";
				break;
				case "Q": $d="F";
				break;
				case "R": $d="G";
				break;
				case "S": $d="H";
				break;
				case "T": $d="I";
				break;
				case "U": $d="J";
				break;
				case "V": $d="K";
				break;
				case "W": $d="L";
				break;
				case "X": $d="M";
				break;
				case "Y": $d="N";
				break;
				case "Z": $d="O";
				break;
				case "a": $d="p";
				break;
				case "b": $d="q";
				break;
				case "c": $d="r";
				break;
				case "d": $d="s";
				break;
				case "e": $d="t";
				break;
				case "f": $d="u";
				break;
				case "g": $d="v";
				break;
				case "h": $d="w";
				break;
				case "i": $d="x";
				break;
				case "j": $d="y";
				break;
				case "k": $d="z";
				break;
				case "l": $d="a";
				break;
				case "m": $d="b";
				break;
				case "n": $d="c";
				break;
				case "o": $d="d";
				break;
				case "p": $d="e";
				break;
				case "q": $d="f";
				break;
				case "r": $d="g";
				break;
				case "s": $d="h";
				break;
				case "t": $d="i";
				break;
				case "u": $d="j";
				break;
				case "v": $d="k";
				break;
				case "w": $d="l";
				break;
				case "x": $d="m";
				break;
				case "y": $d="n";
				break;
				case"z" : $d="o";
				break;
				case"0" : $d="3";
				break;
				case"1" : $d="4";
				break;
				case"2" : $d="5";
				break;
				case"3" : $d="6";
				break;
				case"4" : $d="7";
				break;
				case"5" : $d="8";
				break;
				case"6" : $d="9";
				break;
				case"7" : $d="0";
				break;
				case"8" : $d="1";
				break;
				case"9" : $d="2";
				break;
				}
			$b=intval($b)+1;
			$c=$c.$d;
				}
		return $c;
	}
}	