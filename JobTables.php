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

    <title>Employee Project Assignment |JobTable </title> <!--Setting website name and Title -->
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
<hr>
    <title>Job Info</title>
<body>
    <section>
        <h1>Job Info</h1>
      
        <table>
            <tr>
                <!-- Job info table creation-->
                <th>JobID</th>
                <th>JobDescr</th>
                <th>Assigner Email</th>
                <th>Deadline</th>
                <th>Assigned?</th>
                <th>AssignedTo</th>
                <th>Welding</th>
                <th>CAD</th>
                <th>FDMPrinting</th>
                <th>Lathes</th>
            </tr>
            
            <!-- php code to get data from rows -->
           
            <?php
            //server information variables
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "employeeassignmentproject";


                 $conn = new mysqli($servername,$username,$password, $dbname);
                //create and check connection
                if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 }

             // SQL query to select data from database
                    $sql = " SELECT * FROM jobinfo ORDER BY JobID DESC ";
                    $result = $conn->query($sql);
           
                    while($rows=$result->fetch_assoc()){
                    ?>
                    <tr>
                        <!-- get data from each row of every column -->
                        <td><?php echo $rows['JobID'];?></td>
                        <td><?php echo $rows['JobDescr'];?></td>
                        <td><?php echo $rows['Assigneremail'];?></td>
                        <td><?php echo $rows['Deadline'];?></td>
                        <td><?php echo $rows['Assigned'];?></td>
                        <td><?php echo $rows['AssignedToemail'];?></td>
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
<br>

<hr>

    <center><h2><b>Choose Task</b></h2>
 
        <form method="POST" action="TaskPickerLogic.php">
    
            <fieldset>
        
             <label for = "email"> Employee email </label>
             <input type="text" id="email" name="email" required />
                 <br>

             <label for = "passcode"> Employee passcode </label>
             <input type="text" id="passcode" name="passcode" required />
                 <br>

             <label for = "id"> TaskID</label>
             <input type="number" id="id" name="id" required />
                 <br>

                <br>
                    <input type="submit" value="Choose Task" /> 
                <br>
    </center>
  </body>

 </html>


