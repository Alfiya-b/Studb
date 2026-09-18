<?php
include "db.php";
$sql = "SELECT name, marks FROM student WHERE marks > (SELECT AVG (marks) FROM student)";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>AVG AVG MARKS</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>NAME</th>
            <th>MARKS</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['marks']; ?></td>
                </tr>
                <?php
            }
            ?>
            
    </table>
    <br>
    <a href = "index.php">BACK</a>
</body>
</html>