<!doctype html>
<html lang="en">
<body>
<h1>Books Table</h1>
<?php
// Connect to database
$mysqli = new mysqli("mi-linux", "2410675", "PROXY@68#[68]", "db2410675");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
// Run SQL query
$sql = "SELECT * FROM books ORDER BY Book_id";
$results = mysqli_query($mysqli, $sql);
?>
<table border="1">
<tr>
    <th>Book Name</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Date of Release</th>
</tr>
<?php while($a_row = mysqli_fetch_assoc($results)):?>
<tr>
    <td><?= $a_row['Book_name'] ?></td>
    <td><?= $a_row['Genre'] ?></td>
    <td>£<?= number_format((float)$a_row['Price'], 2) ?></td>
    <td><?= date('d/m/Y', strtotime($a_row['Date_of_release'])) ?></td>
</tr>
<?php endwhile;?>
</table>
</body>
</html>