<!DOCTYPE html> 
<html>
<head>
<style>
	input[type=text] {
		width: 100%;
		padding: 8px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}
	
	h3 {
		text-align: center;
		font-family: "sans-serif";
		color: #36688D;
		background-color: #F3CD05;
	}
	
	body {
		background-color: #BDA589;
	}
</style>
</head>
<body>

<h3> Insert row into table! </h3>
<form action = "insert.php" method = "post">
	ID: <input type="text" name = "ID"> <br>
	Creator: <input type="text" name = "creator"> <br>
	Title: <input type="text" name = "title"> <br>
	Type: <input type="text" name = "type"> <br>
	Identifier: <input type="text" name = "identifier"> <br>
	Date: <input type="date" name = "date"> <br>
	Language: <input type="text" name = "language"> <br>
	Description: <input type="text" name = "description"> <br>
<input type = "submit"> 
</form>

<br> 

<h3> Delete row by giving id! </h3>
<form action = "delete.php" method  = "post">
	ID: <input type="text" name = "ID"> <br>
<input type = "submit" value = "Delete">
</form>


<h3> Update row by giving id! </h3>
<form action = "update.php" method = "post">
	ID: <input type="text" name = "ID"> <br>
	Creator: <input type="text" name = "creator"> <br>
	Title: <input type="text" name = "title"> <br>
	Type: <input type="text" name = "type"> <br>
	Identifier: <input type="text" name = "identifier"> <br>
	Date: <input type="date" name = "date"> <br>
	Language: <input type="text" name = "language"> <br>
	Description: <input type="text" name = "description"> <br>
<input type = "submit" value = "Update">
</form>


<h3> Retrieve row by giving id! </h3>
<form action = "retrieve.php" method = "post">
	ID: <input type="text" name = "ID"> <br>
<input type = "submit" value = "Retrieve">
</form>

</body>
</html>