<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    //server information variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employeeassignmentproject";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Store information from form on variables
$Desc = $_POST['JobDescr'];
$Deadline = $_POST['Deadline'];
$Assigneremail = $_POST['Assigneremail'];
$Welding = isset($_POST['Welding']) ? 1 : 0;
$FDMprinting = isset($_POST['FDMprinting']) ? 1 : 0;
$CAD = isset($_POST['CAD']) ? 1 : 0;
$Lathes = isset($_POST['Lathes']) ? 1 : 0;

//Insert variables on sql table
$sql1 = "INSERT INTO jobinfo (JobID, JobDescr , Assigneremail, Deadline, Welding, FDMPrinting, CAD, Lathes) VALUES ('0', '$Desc', '$Assigneremail','$Deadline', '$Welding', '$FDMprinting', '$CAD', '$Lathes')";
// send query to the database to add values and confirm if successful
$rs1 = mysqli_query($conn, $sql1);


 //close connection
mysqli_close($conn);

$link = "http://localhost/EmployeeProjAssignment/JobTables.php";
    echo '<a href="'.$link.'">JobCreated! Go to Job Tables </a>';
?>