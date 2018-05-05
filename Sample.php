
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<br><br><h1>Welcome to HGBooks !!</h1><br><h2>The One-Stop solution for all the book readers</h2><br><br>
<?php
$hostname = "hgdbinstance.ccmonfdvzpe4.us-west-2.rds.amazonaws.com";
$username = "hgsqluser";
$password = "hgsqluser";
$dbname = "hgbooks";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *  FROM Books";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "<table><tr><th>Book id</th><th>Title</th><th>Author</th><th>Price</th><th>Language</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row["Bookid"]."</td><td>".$row["Title"]."</td><td>".$row["Author"]."</td><td>".$row["Price"]."</td><td>".$row["Language"]."</td></tr>";
    }
} else {
    echo "</table>";
    echo "0 results";
}
$conn->close();
?>
