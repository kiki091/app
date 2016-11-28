<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');	
/**
 * Decryption Helpers
 *
 * @author      Ekalaya Manullang
 */
// ------------------------------------------------------------------------

if( ! function_exists('decryption'))
{	
	function decryption($deskrip)
	{
		$b=0;
		$c="";
		$z=$deskrip;
		$a=strlen($z); 		
		for ($i=1; $i<=$a;$i++){
		$d=(substr($z,$b,1));
			switch($d)
			{
				case "A": $d="L";
				break;
				case "B": $d="M";
				break;
				case "C": $d="N";
				break;
				case "D": $d="O";
				break;
				case "E": $d="P";
				break;
				case "F": $d="Q";
				break;
				case "G": $d="R";
				break;
				case "H": $d="S";
				break;
				case "I": $d="T";
				break;
				case "J": $d="U";
				break;
				case "K": $d="V";
				break;
				case "L": $d="W";
				break;
				case "M": $d="X";
				break;
				case "N": $d="Y";
				break;
				case "O": $d="Z";
				break;
				case "P": $d="A";
				break;
				case "Q": $d="B";
				break;
				case "R": $d="C";
				break;
				case "S": $d="D";
				break;
				case "T": $d="E";
				break;
				case "U": $d="F";
				break;
				case "V": $d="G";
				break;
				case "W": $d="H";
				break;
				case "X": $d="I";
				break;
				case "Y": $d="J";
				break;
				case "Z": $d="K";
				break;
				case "a": $d="l";
				break;
				case "b": $d="m";
				break;
				case "c": $d="n";
				break;
				case "d": $d="o";
				break;
				case "e": $d="p";
				break;
				case "f": $d="q";
				break;
				case "g": $d="r";
				break;
				case "h": $d="s";
				break;
				case "i": $d="t";
				break;
				case "j": $d="u";
				break;
				case "k": $d="v";
				break;
				case "l": $d="w";
				break;
				case "m": $d="x";
				break;
				case "n": $d="y";
				break;
				case "o": $d="z";
				break;
				case "p": $d="a";
				break;
				case "q": $d="b";
				break;
				case "r": $d="c";
				break;
				case "s": $d="d";
				break;
				case "t": $d="e";
				break;
				case "u": $d="f";
				break;
				case "v": $d="g";
				break;
				case "w": $d="h";
				break;
				case "x": $d="i";
				break;
				case "y": $d="j";
				break;
				case "z" : $d="k";
				break;
				case "0" : $d="7";
				break;
				case "1" : $d="8";
				break;
				case "2" : $d="9";
				break;
				case "3" : $d="0";
				break;
				case "4" : $d="1";
				break;
				case "5" : $d="2";
				break;
				case "6" : $d="3";
				break;
				case "7" : $d="4";
				break;
				case "8" : $d="5";
				break;
				case "9" : $d="6";
				break;
			}
		$b=intval($b)+1;
		$c=$c.$d;
		}
		return $c;
	}
}	