<!DOCTYPE html>
<html>
<body>
<table align="left" border="0" cellpadding="3" cellspacing="0">
 
<?php
for($i=1;$i<=10;$i++)
{
echo "<tr>";
for ($j=1;$j<=1;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>
