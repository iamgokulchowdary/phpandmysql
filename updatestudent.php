<?php
    require "dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="head">
            <h3>Update Student</h3>
            <a href="index.php">Back</a>
        </div>
        <div class="body">
            <?php
                if(isset($_GET["id"])){
                    $studentid = mysqli_real_escape_string($con, $_GET["id"]);
                    $query = "SELECT * FROM student WHERE id='$studentid' ";
                    $queryrun = mysqli_query($con,$query);

                    if(mysqli_num_rows($queryrun)>0){
                        $student = mysqli_fetch_array($queryrun);
                        ?>
                        <form action="code.php" method="post">

                            <input type="hidden" value="<?= $student["id"]; ?>" name="id">

                            <label for="name">Name</label><br>
                            <input type="text" value="<?= $student["name"]; ?>" name="name" id="name" maxlength="100" required><br>

                            <label for="email">E-mail</label><br>
                            <input type="text" value="<?= $student["email"]; ?>" name="email" id="email" maxlength="120" required><br>

                            <label for="phone">Phone</label><br>
                            <input type="number" value="<?= $student["phone"]; ?>" name="phone" id="phone" maxlength="10" minlength="10" required><br>

                            <label for="course">Course</label><br>
                            <input type="text" value="<?= $student["course"]; ?>" name="course" id="course" required><br>

                            <button class="btn-save" type="submit" name="updatestudent">Update</button>
                        </form>
                        <?php

                    }else{
                        echo "<h3>NO record found...</h3>";
                    }

                }
            ?>
            
        </div>
    </div>
</body>
</html>