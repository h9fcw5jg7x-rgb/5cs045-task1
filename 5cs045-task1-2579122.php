<?php
$host = "mi-linux";
$user = "2579122";
$pass = "Aminasalihu123";
$dbname = "db2579122";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Movie_name, Genre, Price, Date_of_release FROM movies";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Movie name</th>
        <th>Genre</th>
        <th>Price</th>
        <th>Date of release</th>
    </tr>

    <?php
    while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>".$row['Movie_name']."</td>";
echo "<td>".$row['Genre']."</td>";
echo "<td>£".$row['Price']."</td>";
echo "<td>".date("d/m/Y", strtotime($row['Date_of_release']))."</td>";
echo "</tr>";
}
    ?>

</table>

</body>
</html>

<?php
$conn->close();
?>