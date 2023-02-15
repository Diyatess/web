<?php
include "conn.php";
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mob'];
	$sql="INSERT INTO stud(name,mob) VALUE('$name','$mobile')";
	$result=$conn->query($sql);
	if($result==TRUE)
	{
		echo "Inserted Successfully";
	}
}
$sql="SELECT * FROM stud";
$result=$conn->query($sql);
echo '<table border="1"><tr><th>Name</th><th>Mobile</th></tr>';
while($row=$result->fetch_assoc())
{
    echo"<tr><td>".$row['name']."</td><td>".$row['mob']."</td></tr>";
}
echo "</table>";

?>

<form method="post">
name:
<input type="text" id="name" name="name"><br><br>
Mobile:
<input type="text"  name="mobile"><br><br>
<input type="submit" value="Submit" id="sub" name="sub"><br><br>
</form>