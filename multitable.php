<?php
$cols = 101;
$rows = 101;

echo "<table>";

echo "<tr><th></th>";
for ($head = 1; $head < $cols; $head++)
{
	echo '<th>' .$head. '</th>';
}
echo "</tr>";

for ($r = 1; $r < $rows; $r++)
{
	echo "<tr>";
	echo '<th>' .$r. '</th>';
	for ($c = 1; $c < $cols; $c++)
	{
		echo '<td>' .$r*$c. '</td>';
	}
	echo "</tr>";
}

echo "</table>";
 ?>
