<?php include 'connection.php';?>
<?php
$str ="select * from teachers";
$q =mysqli_query($conn,$str);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>All Teachers</h1>
        <table border="1">
            <thread>
                <tbody>
                <?php 
                while($r =mysqli_fetch_array($q)){ ?>
                <tr>
                    <td><?php echo $r['name'];?></td>
                    <td><?php echo $r['email'];?></td>
                    <td><?php echo $r['salary'];?></td>
                    <td><?php echo $r['department'];?></td>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
            </div>

</body>
</html>