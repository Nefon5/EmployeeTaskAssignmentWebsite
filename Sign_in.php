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
    
    <body style="background-color:lightblue";>
   
    <head>
    
        <title>Employee Project Assignment | Tasks </title>

        <h1><center>EmployeeProjectAssignment Website</center></h1>
   
    </head>

<hr>
<table>
    <thead>
        <tr>
            <th><a href="http://localhost/EmployeeProjAssignment/index.php" target="_self"> See Employees </a> </th>
            <th><a href="http://localhost/EmployeeProjAssignment/JobTables.php" target="_self"> See AvailableJobs  </a> </th>
            <th><a href="http://localhost/EmployeeProjAssignment/Sign_Up.html" target="_self"> Create New Employee Profile </a> </th>
            <th><a href="http://localhost/EmployeeProjAssignment/Sign_in.php" target="_self"> Create New Jobs  </a> </th>
        </tr>
    </thead>
</table>
<hr>

    <h2><b>Create New Tasks</b></h2>
 <form method="POST" action="processJobs.php">
    
     <fieldset>
        
         <label for = "JobDescr">  Job Description*</label>
        <input type="text" id="JobDescr" name="JobDescr" required />
        <br>
    
        <label for = "Assigneremail"> AssignerEmail </label>
        <input type="text" id="Assigneremail" name="Assigneremail" required />
        <br>

        <label for = "Deadline"> Task Deadline </label>
        <input type="date" id="Deadline" name="Deadline" required />
        <br>

        <br>
        *40Chars max use email to inquire on details    
        <h4>Capabilities required</h4>
         <input type="checkbox" id="Welding" name="Welding">
         <label for="Welding">Welding</label>
         <br>

         <input type="checkbox" id="CAD" name="CAD">
         <label for="CAD">CAD</label>
         <br>

         <input type="checkbox" id="FDMprinting" name="FDMprinting" >
         <label for="FDMprinting"> FDMprinting </label>
         <br>

         <input type="checkbox" id="Lathes" name="Lathes" >
         <label for="Lathes">Lathes</label>
         <br>


        <br>
        <input type="submit" value="Create Task" /> 
        <br>
        

 </body>
</html>