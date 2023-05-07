<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Add</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="head">
            <h3>Student Add</h3>
            <a href="index.php">Back</a>
        </div>
        <div class="body">
            <form action="code.php" method="post">
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" maxlength="100" required><br>

                <label for="email">E-mail</label><br>
                <input type="text" name="email" id="email" maxlength="120" required><br>

                <label for="phone">Phone</label><br>
                <input type="number" name="phone" id="phone" maxlength="10" minlength="10" required><br>

                <label for="course">Course</label><br>
                <input type="text" name="course" id="course" required><br>

                <button class="btn-save" type="submit" name="studentadd">Add</button>
            </form>
        </div>
    </div>
</body>
</html>