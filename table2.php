<?php
include_once('query.php');
$query1="select * from employee where esalary>3000";
$result1=mysqli_query($link,"$query1" ) ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home page</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
<img src="home.jpg" id="bg" alt="">
<div class="container">
    <table align="center"  border="1px" style="width:1000px; line-height:25px">
        <tr>
            <th colspan="3" ><h2 align="center">Query results</h2> </th>
        </tr>
        <t>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Salary</th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result1))
        {
            ?>
            <tr>
                <td><?php echo $rows['empid'];?></td>
                <td><?php echo $rows['ename'];?></td>
                <td><?php echo $rows['esalary'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>