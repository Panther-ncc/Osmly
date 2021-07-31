<?php
include_once('query.php');
$query="select saleid,custid,unitsbought*price as pr from product as p,sales as s where s.prodid=p.prodid";
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
            <th colspan="3" ><h2 align="center">Query results</h2> </th>
        </tr>
        <t>
            <th>Sale ID</th>
            <th>Customer ID</th>
            <th>Total price</th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $rows['saleid'];?></td>
                <td><?php echo $rows['custid'];?></td>
                <td><?php echo $rows['pr'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
