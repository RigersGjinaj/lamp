<!DOCTYPE html>
<html>
    <head>
        <title>Prova</title>
        <style>
            table,tr,td,th{
                border: 1px solid black;
                border-collapse: collapse;
            }
            tr,td,th{
                height: 10px;
                width: 600px;
            }
        </style>
    </head>
    <body>
    <?php 

        $host = "db";
        $user = "root";
        $pass = "cicco";
        $db = "demo";

        $mysql = new mysqli($host,$user,$pass,$db);

        $result = $mysql->query("select * from blogs");
        echo "<table>
                <tr>
                    <th>Id</th>
                    <th>Titolo</th>
                    <th>Contenuto</th>
                    <th>data</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo"<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["titolo"]."</td>
                    <td>".$row['contenuto']."</td>
                    <td>".$row['data']."</td>
                </tr>";
        }

        echo "</table>"

    ?>
    </body>
</html>


