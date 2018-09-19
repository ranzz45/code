<?php
//default time zone
date_default_timezone_set("Asia/Jakarta");
//fungsi check tanggal merah
function tanggalMerah($value) {
	$array=json_decode(file_get_contents("https://raw.githubusercontent.com/ranzz45/code/master/libur_nasional_applee.json"),true);
	//check tanggal merah berdasarkan libur nasional
	if(isset($array[$value]))
:		echo"tanggal merah $array[$value]";
	//check tanggal merah berdasarkan hari minggu
	elseif(
date("D",strtotime($value))==="Sun")
:		echo"tanggal merah hari minggu";
	//bukan tanggal merah
	else
		:echo"bukan tanggal merah";
	endif;
}
//testing
$static_date=20161225;
$dynamic_date=date("Ymd");
echo "<h2>Check untuk tanggal (".date("d-m-Y",strtotime($static_date)).")</h2>";
tanggalMerah($static_date);
echo"<h3>Check untuk hari ini (".date("d-m-Y",strtotime($dynamic_date)).")</h3>";
tanggalMerah($dynamic_date);
