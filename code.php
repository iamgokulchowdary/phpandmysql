<?php
    require "dbcon.php";

    if(isset($_POST["studentadd"])){
        $name = mysqli_real_escape_string($con, $_POST["name"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $phone = mysqli_real_escape_string($con, $_POST["phone"]);
        $course = mysqli_real_escape_string($con, $_POST["course"]);

        $query = "INSERT INTO student (name,email,phone,course) VALUES 
        ('$name','$email','$phone','$course')";

        $query_run = mysqli_query($con,$query);

        if($query_run){
            header("Location: index.php");
            exit(0);
        }
    }

    if(isset($_POST["updatestudent"])){
        $studentid = mysqli_real_escape_string($con, $_POST["id"]);
        $name = mysqli_real_escape_string($con, $_POST["name"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $phone = mysqli_real_escape_string($con, $_POST["phone"]);
        $course = mysqli_real_escape_string($con, $_POST["course"]);

        $query = "UPDATE student SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$studentid' ";

        $query_run = mysqli_query($con,$query);

        if($query_run){
            header("Location: index.php");
            exit(0);
        }
    }

    if(isset($_POST["deletestudent"])){
        $studentid = mysqli_real_escape_string($con, $_POST["deletestudent"]);
        
        $query = "DELETE FROM student WHERE id='$studentid' ";

        $query_run = mysqli_query($con,$query);

        if($query_run){
            header("Location: index.php");
            exit(0);
        }
    }

?>