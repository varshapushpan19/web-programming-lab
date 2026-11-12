<?php
$cricket=array("virat","dhoni","sachin","schwag");
echo"<br>displaying name in table format<br>";
echo"<br>.......................</br>";
echo"<br><br>name of cricket players as stored in an array:</br>";
print_r($cricket);
echo"<br><br> names of cricket player as stored in a table:</br>";
echo"<br><table border=2><tr><th> player name</th></tr></br>";
echo"<tr><td>$cricket[0]</td></tr>";
echo"<tr><td>$cricket[1]</td></tr>";
echo"<tr><td>$cricket[2]</td></tr>";
echo"<tr><td>$cricket[3]</td></tr>";
echo"</table>";
?>

