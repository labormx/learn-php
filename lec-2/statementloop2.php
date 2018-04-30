<html>
<head></head>
<body>
<table border>
<?php
for($i=1;$i<10;$i++){
   print('<tr>');
   for ($j=1;$j<10;$j++){
       print('<td>');
       print($i * $j);
       print('</td>');
   }
   print('<tr>'."\n");
}
?>
</table>
</body>
</html>

