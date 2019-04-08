<?php
error_reporting(E_ALL);
$mysliwi = array(
"niedzwiedz", "rekin", "lew", "tygrys",
"orzel", "czlowiek", "kot", "wilk");
$ofiary = array(
"losos", "foka", "gazela", "krolik", "krowa",
"los", "jelen", "indyk");
if(isset($_GET['typ']))
{
	switch($_GET['typ'])
	{
		case 'mysliwy':
		print json_encode($mysliwi[array_rand($mysliwi)]);
		break;
		case 'ofiara':
		print json_encode($ofiary[array_rand($ofiary)]);
		break;
		default:
		print json_encode("brak");
		break;
	}
}
?>