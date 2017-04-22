<?php
/**
* change plain number to formatted currency
*
* @param $number
* @param $currency
*/
function idr_currency($number)
{
	return number_format($number, 0, '.', '.');
}