<?php
$con=mysqli_connect("localhost","root","","qlsv");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT fullname, email FROM student";
$result = mysqli_query($con,$sql);

// Numeric array
$row = mysqli_fetch_array($result, MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

// Associative array
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["fullname"], $row["email"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>
