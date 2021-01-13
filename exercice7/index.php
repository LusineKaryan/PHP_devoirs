<?php
echo "<table width='80%' cellpadding='10' cellspacing='5' border='1'>";
echo "<tr bgcolor='#FFCC66'><td>x</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>";
for($tr=1;$tr<=10;$tr++){
echo "<tr>";
echo "<td bgcolor='#FFCC66'>".$tr."</td>";
for($l=1;$l<=10;$l++){
$calcul=$tr*$l;
echo "<td bgcolor='#FFCC99'>".$calcul."</td>";
}
echo "</tr>";
}
echo "</table>";
?>