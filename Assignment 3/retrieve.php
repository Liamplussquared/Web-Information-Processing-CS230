
<!DOCTYPE html>
<html>
<body>

<?php

$conn = new mysqli("localhost", "root", "","ebook");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_POST["ID"];

$sql = "SELECT * FROM ebook_metadata WHERE '$id' = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " Creator: ". $row["creator"]. " Title: " . $row["title"] . " Type: " .$row["type"]. " Identifier: " .$row["identifier"]. " Date: " .$row["date"]. " Language:" .$row["language"]. " Description: " .$row["description"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>