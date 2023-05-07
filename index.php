<?php
    require "dbcon.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebApp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="head">
            <h3>Student deatils</h3>
            <a href="studentadd.php">Add</a>
        </div>
        <div class="body">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM student";
                        $query_run = mysqli_query($con,$query);
                    
                        if(mysqli_num_rows($query_run)>0){
                            foreach($query_run as $student){
                                ?>
                                <tr>
                                    <td><?= $student["id"]; ?></td>                                        <td><?= $student["name"]; ?></td>
                                    <td><?= $student["email"]; ?></td>
                                    <td><?= $student["phone"]; ?></td>
                                    <td><?= $student["course"]; ?></td>
                                    <td>
                                        <a href="updatestudent.php?id=<?= $student["id"] ?>" class="btn-edit">update</a>

                                        <form action="code.php" method="post">
                                            <button type="submit" value="<?= $student["id"]; ?>" name="deletestudent"  class="del-btn">Delete</button>
                                        </form>
                                        <!-- <a href="#" class="btn-delete">Delete</a> -->
                                    </td>
                                </tr>
                                
                                <?php
                            }
                        }else{
                            echo "<h3>No Record Found...</h3>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>