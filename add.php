<?php
include "db.php";

$course_result = $conn->query("SELECT * FROM course");

$message = "";

if(isset($_POST['add']))
{
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
        "INSERT INTO student(name, marks, cid)
         VALUES (?, ?, ?)");

        $stmt->bind_param("sii", $name, $marks, $cid);

        if($stmt->execute())
        {
            $message = "Added Successfully!!";
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
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<?php
if($message != "")
{
    echo "<p><b>$message</b></p>";
}
?>

<form method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Marks:
    <input type="number" name="marks" min="0" max="100" required>
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

    <br><br>

    <input type="submit" name="add" value="Add Student">

</form>

<br><br>

<a href="index.php">BACK</a>

</body>
</html>