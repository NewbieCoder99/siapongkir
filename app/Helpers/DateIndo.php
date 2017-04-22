<?php
/**
*
* Laravel Helper Tanggal Indo
*
* @package 		Laravel
* @subpackage	Helpers		
* @author		Qudrat Nurfajar YS 			
* @copyright 	http://www.fajarpunya.com 	
* 
* 
*/
// ------------------------------------------------------------------------

function date_id($tgl)
{
	$ubah = gmdate($tgl, time()+60*60*8);
	$pisah = explode("-",$ubah);
	$tanggal = $pisah[2];
	$bulan = month($pisah[1]);
	$tahun = $pisah[0];
	return $tanggal.' '.$bulan.' '.$tahun;
}

function month($bln = '')
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