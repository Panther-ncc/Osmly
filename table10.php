<?php
include_once('query.php');
$query="select e.ename,mname from employee as e,manager as m, worksin as w where e.empid=w.empid and w.deptid=m.deptid";
$result=mysqli_query($link,"$query" ) ;
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
            <th colspan="2" ><h2 align="center">Query results</h2> </th>
        </tr>
        <t>
            <th>Employee name</th>
            <th>Manager Name</th>

        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $rows['ename'];?></td>
                <td><?php echo $rows['mname'];?></td>

            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
