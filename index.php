<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Create Teacher</h2>
        <form action="" method="post">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" id="">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" id="">
            </div>
            <div>
                <label for="">Salary</label>
                <input type="number" name="salary" id="">
            </div>
            <div>
                <label for="">Department</label>
                <select name="department" id="">
                    <option value="">Select Department</option>
                    <option value="CSE">Computer Science & Engineering</option>
                    <option value="CE">Civil Engineering</option>
                </select>
            </div>
            <div>
                <button type="submit" name="submitBtn">Save</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
   if(isset($_POST['submitBtn'])){
    
    $teacher_name=$_POST["name"];
    $teacher_email=$_POST["email"];
    $teacher_salary=$_POST["salary"];
    $teacher_department=$_POST["department"];

    $str="INSERT INTO teachers(name,email,salary,department)
    VALUES ('".$teacher_name."','".$teacher_email."',$teacher_salary,'".$teacher_department."')";
    if(mysqli_query($conn,$str)){

        echo'Successfully Inserted';
    }
    
   }
   ?>