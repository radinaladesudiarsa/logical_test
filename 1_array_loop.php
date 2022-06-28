<?php 

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$i = 0;
$count = count($aplikasi);
while ($i < $count) {
	$i++;
	echo $aplikasi[$i].'<br>';
}

?>