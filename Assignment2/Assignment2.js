function sumGrades() {
  var table = document.getElementById("mainTable");

  var numRows = table.rows.length;
  var sum = 0;

  for (var i = 1; i < numRows; i++) {
    sum = 0;
    var cells = table.rows[i].cells;
    for (var j = 2; j < cells.length - 1; j++) { //loops through assignments
      cells[j].contentEditable = "true";
      var grade = cells[j].innerText;
      if (!isNaN(grade)) {
        sum += parseInt(grade); //getting sum of grades
      } else { //updates all cells to default if final grade has been stored in them
        if (grade != "-") {
          console.log(grade);
          cells[j].innerText = "-";
          cells[j].style.color = "black";
          cells[j].style.backgroundColor = "white";
        }
      }
    }
    var avg = sum / (cells.length - 3);
    if (avg < 40) {
      cells[cells.length - 1].innerText = avg + "%";
      cells[cells.length - 1].style.backgroundColor = "red";
      cells[cells.length - 1].style.color = "white";
    } else {
      cells[cells.length - 1].innerText = avg + "%";
      cells[cells.length - 1].style.backgroundColor = "white";
      cells[cells.length - 1].style.color = "black";
    }
  }

  //need to fix bug where cells left with average stored in them after final grades calculated but subsequent students/assignments added


}

function insertRow() {
  //need to know how many cells to insert
  var table = document.getElementById("mainTable");
  var numCells = table.rows[0].cells.length;
  var newRow = table.insertRow(-1); //insert at end

  for (var i = 0; i < numCells; i++) {
    var insertCell = newRow.insertCell(i);

    //make sure allignment matches up
    if (i > 1 & i < numCells) {
      insertCell.style.textAlign = "right";
    }

    //make sure cells are content-editable
    if (i < numCells - 1) {
      insertCell.contentEditable = "true";
    }
    insertCell.innerText = "-";
  }
}

function insertColumn() {
  var table = document.getElementById("mainTable");
  var numRows = table.rows.length;

  //want to append head to right of cell containing last Assignment
  var newHead = document.createElement('th');
  var ass_num = table.rows[0].cells.length - 2
  newHead.innerText = "ASSIGNMENT " + ass_num; //so I don't have to make it content editable
  newHead.contentEditable = "true";
  newHead.className = "tg-c3ow";
  //inserting new table head before final grade
  table.rows[0].insertBefore(newHead, table.rows[0].children[table.rows[0].cells.length - 1]);

  for (var i = 1; i < table.rows.length; i++) {
    var newCell = table.rows[i].insertCell(table.rows[0].cells.length - 1);
    newCell.innerText = "-";
    newCell.style.textAlign = "right";
    newCell.contentEditable = "true";
  }

  //could update last cell to default if final grade has been stored in it 

}

function saveTable() {
	alert("Note: must run fiddle again to load previous saved table!");
  //NOTE, must click calculate final grades to create a valid save
  var data = ""; //going to store elements of table in this
  var table = document.getElementById("mainTable");
  for (var i = 1; i < table.rows.length; i++) { //loop through rows
    for (var j = 0; j < table.rows[0].cells.length - 1; j++) { //loop through cells
      data = data + table.rows[i].cells[j].innerText + "#";
    }
    var fGrade = table.rows[i].cells[table.rows[0].cells.length-1].innerText;
    fGrade = fGrade.replace(/%/g, "");
    data = data + fGrade;
    data = data + "|"; //row break
  }
  document.cookie = data;
}

function retrieveTable() {
  var load = decodeURIComponent(document.cookie);
  //want to get number of columns and rows
  var numRows = 0;
  var numCols = 0;

  var data = load.split(";");
  for (var i = 0; i < data.length; i++) {
    var c = data[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
  }
  var table_data = data[0];
  var temp = table_data.split("|");

  numRows = temp.length;
  numCols = temp[0].split("#").length;

  var rTable = "";

  var presentTable = "";
  for(var q = 0; q < temp.length; q++) {
  	var row = temp[q];
    row = row.replace(/#/g, " ");
    presentTable = presentTable + row + "\n";
  }
  //presentTable = presentTable.replace(/#/g, " ");
  alert("Last table had " + numRows + " rows" + " and " + numCols + " columns" + "\n" + " The data was \n" + presentTable);


}
