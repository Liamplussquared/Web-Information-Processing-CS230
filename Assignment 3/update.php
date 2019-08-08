<!DOCTYPE html>
<html>
<body>

<?php
	$conn = mysqli_connect("localhost", "root", "", "ebook");
	$ID = $_POST["ID"];
	$creator = $_POST["creator"];
	$title = $_POST["title"];
	$type = $_POST["type"];
	$identifier = $_POST["identifier"];
	$date = explode('-',$_POST["date"]);
	$newDate = $date[0].'-'.$date[1].'-'.$date[2];
	//$language = $_POST["language"];
	$description = $_POST["description"];
	
	$sql = "UPDATE eBook_MetaData SET creator = '$creator',title ='$title',type ='$type',identifier = '$identifier',date ='$newDate', language = 'english',description = '$description' WHERE '$ID' = ID";
	//$sql = "INSERT INTO ebook_metadata (id, creator, title, type, identifier, date, language, description) VALUES ($ID, $creator, $title, $type, $identifier, '2019-03-06', $language, $description)";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
	$conn->close();
?>

<body>
</html>