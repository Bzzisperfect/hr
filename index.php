<?php
for ($i=0,$x=0; $x<16; $x++) {
	for ($y=0; $y<16; $y++) {
	  $chars [$x][$y] = array($i, chr($i));
	  $i++;
	}
}
?>
<table border=6 cellpadding=2 cellpadding=0>
<?foreach ($chars as $row) {?>
 <tr>
 <?foreach ($row as $cell) {?>
 <td>
  <?=$cll[0]?>:
  <b><tt><?=$cell[1]?></tt></b>
  </td>
  <?}?>
  </tr>
  <?}?>
  </table>

  </br>

  <?php
$str="   TEST   ";
echo trim ($str);
echo "</br>";
echo ltrim ($str);
echo "</br>";
echo chop ($str);
?>