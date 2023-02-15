
<html>
    <h3> Name of Indian Cricket Players</h3>
</html>
<?php
$a=array('Virat Kohli', 'Rohit Sharma', 'Shikhar Dhawan', 'Jasprit Bumrah', 'Ravichandran Ashwin');
echo '<table border="1">';
foreach($a as $x)
{
    echo '<tr><th>'. $x.'</th></tr>';
}
echo "</table>";
?>