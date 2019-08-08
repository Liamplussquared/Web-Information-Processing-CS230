//note, load type = onload!
document.getElementById("click").onclick = function() {
  //note, ID numbers must be integers to work, don't ask
  //in future, can use functions built in to JavaScript for dealing with table cells... 
  //I id'd every table cell individually to colour them for the extra credit question, I could use these ids to streamling the process below...
  for (var k = 1; k <= 10; k++) {
    var s1 = document.getElementById(k).textContent; //this is a string!

    s1 = s1.split("/\n/");

    for (var i = 0; i < s1.length; ++i) {
      s1[i] = s1[i].replace(/(\r\n|\n|\r)/gm, ""); //removes new lines
    }

    var details = s1[0];
    details = details.trim();
    var array = details.split(" ");
    var arr = array.filter(Number);


    var sum = 0;
    if (!isNaN(arr[1])) sum += parseInt(arr[1]);
    if (!isNaN(arr[2])) sum += parseInt(arr[2]);
    if (!isNaN(arr[3])) sum += parseInt(arr[3]);
    if (!isNaN(arr[4])) sum += parseInt(arr[4]);
    if (!isNaN(arr[5])) sum += parseInt(arr[5]);
    var average = 0;
    if (!isNaN(sum / 5)) {
      average = parseInt(sum / 5);
    }

    var finalGrade = document.getElementById(100 - k);
    finalGrade.innerHTML = average + "%";
    if (average < 40) {
      finalGrade.style.backgroundColor = "#ff6262";
      finalGrade.style.color = "white";
    } else {
      finalGrade.style.backgroundColor = "white";
      finalGrade.style.color = "black";
    }
  }
}


document.getElementById("click2").onclick = function() {
  var missing = [];
  for (var i = 1; i < 11; i++) {
    var student = document.getElementById(i).textContent;
    student = student.split("/\n/");
    for (var k = 0; k < student.length; k++) {
      student[k] = student[k].replace(/(\r\n|\n|\r)/gm, "");
    }

    var details = student[0];
    details = details.trim();
    var array = details.split(" ");
    var missingAss = 0;
    for (var j in array) {
      if (array[j] == "-") {
        missingAss++;
      }
    }
    missing.push(missingAss);
  }
  //console.log(missing);
  var sumMissing = 0;
  for (var temp = 0; temp < missing.length; temp++) {
    sumMissing = sumMissing + missing[temp];
  }
  //var str = "Student 1 missing: " + missing[0] + "\nStudent 2 missing: " + missing[1] + "\nStudent 3 missing: " + missing[2] + "\nStudent 4 missing: " + missing[3] + "\nStudent 5 missing: " + missing[4] + "\nTotal missing: " + sumMissing;

  var stateMissing = document.getElementById("unsubmitted");
  stateMissing.innerHTML = "Total missing is: " + sumMissing;

  //now to change background color if containing "-"... there's a more efficient way to do this, but time is an issue
  var gradeIds = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWX";
  for (var pos = 0; pos < gradeIds.length; pos++) {
    var change = document.getElementById(gradeIds.charAt(pos));
    var g = document.getElementById(gradeIds.charAt(pos)).textContent;
    if (g == "-") { //here only checking if exactly equal to "-", could also check if valid number?
      change.style.backgroundColor = "#ffff7d";
    } else {
      change.style.backgroundColor = "white";
    }
  }
}
