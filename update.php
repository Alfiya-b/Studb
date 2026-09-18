<?php
include "db.php";

$course_result = $conn->query("SELECT * FROM course");

$message = "";
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $marks = $_POST['marks'];
    $cid = $_POST['cid'];

    if($marks < 0 || $marks > 100)
    {
        $message = "Marks must be between 0 and 100";
    }
    else
    {
        $stmt = $conn->prepare(
        "UPDATE student
         SET name=?, marks=?, cid=?
         WHERE id=?");

        $stmt->bind_param(
        "siii",
        $name,
        $marks,
        $cid,
        $id);

        if($stmt->execute())
        {
            if($stmt->affected_rows > 0)
            {
                $message = "Student Updated Successfully!";
            }
            else
            {
                $message = "Student ID Not Found!";
            }
        }
        else
        {
            $message = "ERROR: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>

<h2>Update Student</h2>
<?php
if($message != "")
{
    echo "<p><b>$message</b></p>";
}
?>

<form method="post">

    ID:
    <input type="number" name="id" required>
    <br><br>

    Name:
    <input type="text" name="name" required>
    <br><br>

    Marks:
    <input type="number" name="marks" required>
    <br><br>

    Course:
<select name="cid" required>

<?php
while($row = $course_result->fetch_assoc())
{
?>
    <option value="<?php echo $row['cid']; ?>">
        <?php echo $row['cname']; ?>
    </option>
<?php
}
?>

</select>

    <input type="submit" name="update" value="Update Student">

</form>





<br><br>

<a href="index.php">BACK</a>

</body>
</html>