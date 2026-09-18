<?php
include "db.php";

$message = "";

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

   $stmt = $conn->prepare("DELETE FROM student WHERE id=?");


    $stmt->bind_param("i",$id);

    if($stmt->execute())
    {
        if($stmt->affected_rows > 0)
        {
            $message = "Student removed successfully!";
        }
        else
        {
            $message = "Error removing student.";
        }
}   }
?>

<!DOCTYPE html>
<html>
<head>
    <title>delete Student</title>
</head>
<body>

<h2>Remove Student</h2>

<form method="post">

    ID:
    <input type="number" name="id" required>
    <br><br>


    <input type="submit" name="delete" value="Remove Student">

</form>

<br>

<?php echo $message; ?>

<br><br>

<a href="index.php">BACK</a>

</body>
</html>