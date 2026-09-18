<?php
$con=mysqli_connect("localhost","root","","test");
if(isset($_POST['add']))
mysqli_query($con, "INSERT INTO student(name) VALUES('$_POST[name]')");

if(isset($_POST['update']))
mysqli_query($con, "UPDATE student SET name='$_POST[name]' WHERE id=$_POST[id]");

if(isset($_GET['delete']))
mysqli_query($con, "DELETE FROM student WHERE id=$_GET[delete]");
?>

<form method="post">
ID: <input name="id">
NAME: <input name="name">
<input type="submit" name="add" value="Insert">
<input type="submit" name="update" value="Update">
</form>
<h3>STUDENTS</h3>
<?php
$r=mysqli_query($con, "SELECT * FROM student");
while($x=mysqli_fetch_assoc($r))
echo $x['id']."::".$x['name']. "<a href='?delete=".$x['id']."'><br>DELETE</a><br>";

