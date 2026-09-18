<?php
include "db.php";
$sql = "SELECT student.id,student.name,student.marks,course.cname FROM student
JOIN course ON student.cid = course.cid";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Student and their courses</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>MARKS</th>
            <th>COURSE</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['marks']; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                </tr>
                <?php
            }
            ?>
            
    </table>
    <br>
    <a href="index.php">BACK</a>

</body>
</html>