<!DOCTYPE html>
<html>
<head>
    <title>STUDENT COURSE MANAGEMENT</title>
    <style>
        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
            background-color: aquablue;
            color:#333;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:10px;
        }
        .container{
            width:100%;
            max-width:600px;
            background:#ffffff;
            padding:20px;
            border-radius:12px;
            box-shadow:0 4px 15px rgba(0,0,0,0.5);
            text-align:center;
        }
        h1{
            color:#333;
            font-size:24px;
            font-weight:700;
            margin-bottom:8px;
            text-transform:uppercase;
            letter-spacing:0.5px;
        }
        h3{
            color:#64748b;
            font-size:14px;
            font-weight:600;
            margin-bottom:27px;
            text-transform:uppercase;
            letter-spacing:1px;
        }
        .menu-list{
            display:flex;
            flex-direction:column;
            gap:4px;
        }
        .menu-item{
            display:block;
            text-decoration:none;
            color:#2563eb;
            background-color: #eff6ff;
            padding:14px 20px;
            border-radius:12px;
            font-size:16px;
            font-weight:600;
            border:1px solid #dbaefe;
            transition: all 0.2s ease-in-out;
        }
        .menu-item:hover{
            background-color: #2563eb;
            color:#ffffff;
            border-color:#2563eb;
            transform:translateY(-2px);
            box-shadow:0 4px 12px rgba(37, 99, 235, 0.15);

        }
    </style>

</head>
<body>
    <div class="container">
    <h1>STUDENT COURSE MANAGEMENT</h1><br>
  
    <div class="menu-list">
    <a href="join.php" class="menu-item">Students Details</a><br>
    <a href="subquery.php" class="menu-item">ABV AVG MARKS STUDENTS</a><br>
    <a href="search.php" class="menu-item">Search Students</a><br>
    <a href="add.php" class="menu-item">Add Student</a><br>
    <a href="update.php" class="menu-item">Update Student</a><br>
    <a href="delete.php" class="menu-item">Remove Student</a><br>
</div>
</div>
    
</body>
</html>