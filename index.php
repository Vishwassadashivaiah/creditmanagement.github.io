<?php
    require_once('connect.php'); //connect to database
    $query = "select * from users";
    $result = mysqli_query($link,$query);
?>

<html>
	<head>
        <title>Credit Management</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body bgcolor="#FFA500">

        
        <header>
            <h1>CREDIT MANAGEMENT</h1>
            <h2>ALL USERS</h2>

        </header>    
        <table>
			
			</thead>

            <!--fetch and display data from MySQL-->
            <br>
            <?php
                $i=1;
                while($row = mysqli_fetch_array($result)) {
                    
                    $display=$row["name"];
                    echo "<td> ". $row["name"] ." <td> ";
                    echo "<td> ". $row["email"] ." <td> ";
                    echo"<td><a href=credittransfer.php?name=" . $row["name"] . ">select</a><td>";
                    echo "</tr>";
                    ++$i;
                }
            ?>

        </table>
    </body>
</html>