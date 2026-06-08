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

    $taskid=$_POST["id"];
    $email = $_POST["email"];
    $passcode = $_POST["passcode"];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//check if email and passcode match employees
$sql1 = "SELECT * FROM employeeinfo 
        WHERE email = '$email' 
        AND passcode = '$passcode' ";
        
// send query
$rs1 = mysqli_query($conn, $sql1);

//if query result is empty die
if(mysqli_num_rows($rs1) == 0)
{
    die("Invalid email or passcode<br><a href='JobTables.php'>Go Back</a>");}
else{

//get requested JobID and get all relative information
$sql2 = "SELECT * FROM jobinfo
        WHERE JobID = '$taskid' ";
        
// send query to the database to check values and confirm if successful
$rs2 = mysqli_query($conn, $sql2);

$employee = mysqli_fetch_assoc($rs1);
$task = mysqli_fetch_assoc($rs2);


//check if employee has all the required capabilities, if he doesn't die
if($task['Welding'] == 1 && $employee['Welding'] != 1)
{
    die("Employee cannot weld.<br><a href='JobTables.php'>Go Back</a>");
}

if($task['CAD'] == 1 && $employee['CAD'] != 1)
{
    die("Employee cannot CAD.<br><a href='JobTables.php'>Go Back</a>");
}

if($task['FDMPrinting'] == 1 && $employee['FDMPrinting'] != 1)
{
    die("Employee cannot FDM Print.<br><a href='JobTables.php'>Go Back</a>");
}

if($task['Lathes'] == 1 && $employee['Lathes'] != 1)
{
    die("Employee cannot use a Lathe.<br><a href='JobTables.php'>Go Back</a>");
}
}

//Set task as assigned
$sql3 = "UPDATE jobinfo
         SET Assigned = 1
         WHERE JobID = '$taskid'";

mysqli_query($conn, $sql3);
 
//Set Assigned email 
$sql4 = "UPDATE jobinfo
         SET AssignedToemail = '$email'
         WHERE JobID = '$taskid'";

mysqli_query($conn, $sql4);

mysqli_close($conn);

$link = "http://localhost/EmployeeProjAssignment/JobTables.php";
    echo '<a href="'.$link.'"> Task Chosen Successfully! Go to Job Tables </a>';
?>