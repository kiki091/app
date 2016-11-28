<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * CodeIgniter Date Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Philip Sturgeon
 */

// ------------------------------------------------------------------------

function format_date($unix, $format = 'd M Y H:i:s')
{
	if ($unix == '' || ! is_numeric($unix))
	{
		$unix = strtotime($unix);
	}

	return strstr($format, '%') !== FALSE
		? ucfirst(utf8_encode(strftime($format, $unix))) //or? strftime($format, $unix)
		: date($format, $unix);
}

function db_to_timestamp($datetime = "")
{
  // function is only applicable for valid MySQL DATETIME (19 characters) and DATE (10 characters)
  $l = strlen($datetime);
    if(!($l == 10 || $l == 19))
      return 0;

    //
    $date = $datetime;
    $hours = 0;
    $minutes = 0;
    $seconds = 0;

    // DATETIME only
    if($l == 19)
    {
      list($date, $time) = explode(" ", $datetime);
      list($hours, $minutes, $seconds) = explode(":", $time);
    }

    list($year, $month, $day) = explode("-", $date);

    return mktime($hours, $minutes, $seconds, $month, $day, $year);
}

/**
* Convert MySQL's DATE (YYYY-MM-DD) or DATETIME (YYYY-MM-DD hh:mm:ss) to date using given format string
*
* Returns the date (format according to given string) of a given DATE/DATETIME
*
* @author Clemens Kofler <clemens.kofler@chello.at>
* @access    public
* @return    integer
*/
function db_to_date($datetime = "", $format = "d M Y, H:i")
{
    return date($format, db_to_timestamp($datetime));
}

function db_to_date_only($datetime = "", $format = "d F Y")
{
    return date($format, db_to_timestamp($datetime));
}

/**
* Convert timestamp to MySQL's DATE or DATETIME (YYYY-MM-DD hh:mm:ss)
*
* Returns the DATE or DATETIME equivalent of a given timestamp
*
* @author Clemens Kofler <clemens.kofler@chello.at>
* @access    public
* @return    string
*/
function timestamp_to_db($timestamp = "", $datetime = true)
{
  if(empty($timestamp) || !is_numeric($timestamp)) $timestamp = time();

    return ($datetime) ? date("Y-m-d H:i:s", $timestamp) : date("Y-m-d", $timestamp);
} 

function now()
{
	$tm = getdate();
	return $tm[0];	
}

function phpdbnow()
{
	$now = getdate();
	return date('Y-m-d H:i:s',mktime($now['hours'],$now['minutes'],$now['seconds'],$now['mon'],$now['mday'],$now['year']));
}

function nice_date($delta){
	$blocks = array (
		array('tahun',  (3600 * 24 * 365)),
		array('bulan', (3600 * 24 * 30)),
		array('minggu',  (3600 * 24 * 7)),
		array('hari',   (3600 * 24)),
		array('jam',  (3600)),
		array('menit',   (60)),
		array('detik',   (1))
	);
	
	$harian = array(
		'Sunday' => 'Minggu',
		'Monday' => 'Senin',
		'Tuesday' => 'Selasa',
		'Wednesday' => 'Rabu',
		'Thursday' => 'Kamis',
		'Friday' => 'Jumat',
		'Saturday' => 'Sabtu'
	);

	
	#Get the time from the function arg and the time now
	$argtime = strtotime($delta);
	$nowtime = time();
	
	#Get the time diff in seconds
	$diff    = $nowtime - $argtime;
	
	#Store the results of the calculations
	$res = array ();
	
	#Calculate the largest unit of time
	for ($i = 0; $i < count($blocks); $i++) {      
		$title = $blocks[$i][0];      
		$calc  = $blocks[$i][1];      
		$units = floor($diff / $calc);      
		if ($units > 0) {
			$res[$title] = $units;
		}
	}
	
	if (isset($res['tahun']) && $res['tahun'] > 0) {
		if (isset($res['bulan']) && $res['bulan'] > 0 && $res['bulan'] < 12) {        
			$format      = "%s %s %s %s lalu";         
			$year_label  = $res['tahun'] > 1 ? 'tahun' : 'tahun';
			$month_label = $res['bulan'] > 1 ? 'bulan' : 'bulan';
			return sprintf($format, $res['tahun'], $year_label, $res['bulan'], $month_label);
		} else {
			$format     = "%s %s lalu";
			$year_label = $res['tahun'] > 1 ? 'tahun' : 'tahun';
			return sprintf($format, $res['tahun'], $year_label);
		}
	}
	
	if (isset($res['bulan']) && $res['bulan'] > 0) {
		if (isset($res['hari']) && $res['hari'] > 0 && $res['hari'] < 31) {        
			$format      = "%s %s %s %s lalu";         
			$month_label = $res['bulan'] > 1 ? 'bulan' : 'bulan';
			$day_label   = $res['hari'] > 1 ? 'hari' : 'hari';
			return sprintf($format, $res['bulan'], $month_label, $res['hari'], $day_label);
		} else {
			$format      = "%s %s lalu";
			$month_label = $res['bulan'] > 1 ? 'bulan' : 'bulan';
			return sprintf($format, $res['bulan'], $month_label);
		}
	}
	
	if (isset($res['hari']) && $res['hari'] > 0) {
		if ($res['hari'] == 1) {
			return sprintf("kemarin jam %s", date('H:i', $argtime));
		}
		if ($res['hari'] <= 7) {
			//$tmp = date
			//return sprintf("%s, %s", $harian[date('l', $argtime)],date('H:i', $argtime)); //date("\h\a\\r\\i l, h:i a", $argtime);
		}
		if ($res['hari'] <= 31) {         
			//return sprintf('%s, %s', $harian[date('l', $argtime)],date('H:i', $argtime)); //date("l \j\a\\t H:i", $argtime);       
			return sprintf('%s hari yang lalu, %s', $res['hari'], date('H:i', $argtime));
		}     
	}         
	if (isset($res['jam']) && $res['jam'] > 0) {
		if ($res['jam'] > 1) {
			return sprintf("%s jam yang lalu", $res['jam']);
		} else {
			return "satu jam yang lalu";
		}
	}
	
	if (isset($res['menit']) && $res['menit']) {
		if ($res['menit'] == 1) {
			return "satu menit yang lalu";
		} else {
			return sprintf("%s menit yang lalu", $res['menit']);
		}
	}
	
	if (isset ($res['detik']) && $res['detik'] > 0) {
		if ($res['detik'] == 1) {
			return "baru saja";
		} else {
			return sprintf("%s detik yang lalu", $res['detik']);
		}
	}
	
	return 'baru saja';
}

if ( ! function_exists('tgl_indo'))
{
	function tgl_indo($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-", $ubah);
		$tanggal = $pecah[2];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
}

if ( ! function_exists('tgl_indo_2'))
{
	function tgl_indo_2($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-", $ubah);
		$tanggal = $pecah[2];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
}

if ( ! function_exists('bulan'))
{
	function bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}

if ( ! function_exists('tgl_indo_pendek'))
{
	function tgl_indo_pendek($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[2];
		$bulan = bulan_pendek($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
}

if ( ! function_exists('bulan_pendek'))
{
	function bulan_pendek($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Jan";
				break;
			case 2:
				return "Feb";
				break;
			case 3:
				return "Mar";
				break;
			case 4:
				return "Apr";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Jun";
				break;
			case 7:
				return "Jul";
				break;
			case 8:
				return "Agu";
				break;
			case 9:
				return "Sep";
				break;
			case 10:
				return "Okt";
				break;
			case 11:
				return "Nov";
				break;
			case 12:
				return "Des";
				break;
		}
	}
}

if ( ! function_exists('nama_hari'))
{
	function nama_hari($tanggal)
	{
		$ubah = gmdate($tanggal, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tgl = $pecah[2];
		$bln = $pecah[1];
		$thn = $pecah[0];

		$nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
		$nama_hari = "";
		if($nama=="Sunday") {$nama_hari="Minggu";}
		else if($nama=="Monday") {$nama_hari="Senin";}
		else if($nama=="Tuesday") {$nama_hari="Selasa";}
		else if($nama=="Wednesday") {$nama_hari="Rabu";}
		else if($nama=="Thursday") {$nama_hari="Kamis";}
		else if($nama=="Friday") {$nama_hari="Jumat";}
		else if($nama=="Saturday") {$nama_hari="Sabtu";}
		return $nama_hari;
	}
}

function birthday($birthday)
{
	list($year,$month,$day) = explode("-",$birthday);
	$year_diff  = date("Y") - $year;
	$month_diff = date("m") - $month;
	$day_diff   = date("d") - $day;
	if ($month_diff < 0) $year_diff--;
	elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
	return $year_diff;
}