<html>
<!-- Setting document visual settings -->
   <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Arial';
        }

        td {
            background-color:whi;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>


<body style="background-color:lightblue"
<head>

    <title>Employee Project Assignment |Main </title>  <!--Setting website name and Title -->
    <h1><center>EmployeeProjectAssignment Website</center></h1>
</head>
<hr>
<body>
<table>
    <thead>
        <tr>
                <!-- Main link bar creation-->
            <th><a href="http://localhost/EmployeeProjAssignment/index.php" target="_self"> See Employees  </a> </th>
            <th><a href="http://localhost/EmployeeProjAssignment/JobTables.php" target="_self"> See AvailableJobs  </a> </th>
            <th><a href="http://localhost/EmployeeProjAssignment/Sign_Up.html" target="_self"> Create New Employee Profile </a> </th>
            <th><a href="http://localhost/EmployeeProjAssignment/Sign_in.php" target="_self"> Create New Jobs  </a> </th>
        </tr>
    <thead>
</table>
</body>
<!-- Employee info table creation-->
<hr>
    <title>Employee Info</title>
<body>
    <section>
        <h1>EmployeeInfo</h1>
        
        <table>
            <tr>
                <th>id</th>
                <th>F.Name</th>
                <th>L.Name</th>
                <th>email</th>
                <th>Welding</th>
                <th>FDMPrinting</th>
                <th>Lathes</th>
                <th>CAD</th>
            </tr>
            <!-- Php to get data from rows -->
           
            <?php
            //server information variables
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "employeeassignmentproject";


                 $conn = new mysqli($servername,$username,$password, $dbname); //connect to sql server and validate connection
  
                if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 }

             // SQL query to select data from database
                    $sql = " SELECT * FROM employeeinfo ORDER BY id DESC ";
                    $result = $conn->query($sql);
                //Write as many rows as there are to result var 
                    while($rows=$result->fetch_assoc()){
                    ?>
                    <tr>
                        <!-- Get data from each row of every column -->
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['fName'];?></td>
                        <td><?php echo $rows['lName'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['Welding'];?></td>
                        <td><?php echo $rows['FDMPrinting'];?></td>
                        <td><?php echo $rows['Lathes'];?></td>
                        <td><?php echo $rows['CAD'];?></td>
                    </tr>
                    <?php
                    }
                $conn->close();
                ?>
            

        </table>
    </section>
</body>

</html>

