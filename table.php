<?php
include_once('query.php');
$query="select * from customer";
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
<img src="homeimg.jpg" id="bg" alt="">
<div>
<form >
    <div class="search-box">
        <input class="search-txt" type="text" name="searchquery" placeholder="type the query to search">
        <button type="submit" class="search-btn">
            <div id="searchicon">
                &#9906;
            </div>
        </button>
    </div>
</form>
</div>

<div class="container">
    <table align="center"  border="1px" style="width:1000px; line-height:25px">
        <tr>
            <th colspan="3" ><h2 align="center">Query results</h2> </th>
        </tr>
        <t>
            <th>Cust id</th>
            <th>Name</th>
            <th>Phone number</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>
            <tr>
                <td><?php echo $rows['custid'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['phonenumber'];?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>
</body>
</html>