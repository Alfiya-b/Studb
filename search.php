<?php
include "db.php";
$result=null;
if(isset($_POST['search']))
    {
        $name=$_POST['name'];
        $stmt= $conn->prepare("SELECT student.id,student.name,student.marks,course.cname FROM student
JOIN course ON student.cid = course.cid WHERE student.name=?");
$stmt->bind_param("s",$name);
$stmt->execute();
$result=$stmt->get_result();

    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>search student</h2>
    <form method="post">
        NAME: <input name="name"><br><br>
<input type="submit" name="search" value="search">
</form>
<br>
<?php
if($result && $result->num_rows>0)
    {
        ?>
        <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>COURSE</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                </tr>
                <?php
            }
                ?>
            
    </table>
    <?php
    }
    elseif(isset($_POST['search']))
        {
            echo "Bhai kon hai yeh!!";
        }
        ?>
        <br><br>
        <a href="index.php">BACK</a>

</body>
</html>
    