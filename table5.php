<?php
include_once('query.php');
$query="select a.custid,a.prodid,a.unitsbought from sales as a,productreturn as b where a.saleid=b.sid";
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
            <th>Customer ID</th>
            <th>Product ID</th>
            <th>Units bought</th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $rows['custid'];?></td>
                <td><?php echo $rows['prodid'];?></td>
                <td><?php echo $rows['unitsbought'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>