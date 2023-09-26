<?php
$db = mysqli_connect("localhost", "root", "root", "psixobd");

$Id = (int) $_GET['q'];

$result = mysqli_query($db, "SELECT * FROM customer WHERE id = ".$Id."");

echo "<table border='1'>
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>lname</th>
            <th>datebirth</th>
            <th>adress</th>
            <th>mail</th>
            <th>phone</th>
        </tr>
";

echo mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result))
{
    echo "
        <tr>
            <td>".$row['id']."</td>
            <td>".$row['fname']."</td>
            <td>".$row['lname']."</td>
            <td>".$row['datebirth']."</td>
            <td>".$row['adress']."</td>
            <td>".$row['mail']."</td>
            <td>".$row['phone']."</td>
        </tr>
    ";

}

echo "</table>";

mysqli_close($db);
?>