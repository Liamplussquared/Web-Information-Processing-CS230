
<!DOCTYPE html>
<html>
<body>

<?php

$conn = new mysqli("localhost", "root", "","ebook");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_POST["ID"];

$sql = "DELETE FROM ebook_metadata WHERE '$id' = id";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 

</body>
</html>