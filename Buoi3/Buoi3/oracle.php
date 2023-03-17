<?php 
$conn == oci_connect("phphol", "welcome", "//localhost/orcl");
if (!$conn){
    $m = oci_error();
    echo $m['massage'], "\n";
    exit;
}
else {
    print "Connected to Oraccle!";
}
oci_close($conn);
?>

