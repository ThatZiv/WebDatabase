<?php
    include_once 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>ZivinityGaming WebDBview</title>
            <header>
                <!-- Do Not Change/Remove -->
                Copyright © ThatZiv
            </header>
        </div>
  </head>
  <style>
/*CSS*/
h1 {
    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
}
tr {
    display: table-row;
    vertical-align: inherit;
    background-color: #000000;
    border-color: inherit;
    height: 40px;
    margin: 400px;
    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
} 
table, td {
   border: 1px solid black;
/*If you change the background-color (master color table) for the th, change this background color to #ffffff */
   background-color: #000000;
   color: rgb(0, 0, 0);
   margin: 600;
   font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
}
th {
/*Change background-color for the overall color of the table*/
    background-color: #ffffff;
    color: black;
    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
}

  </style>

  <body>
  <h1>
  ZivinityGaming WebDatabase Viewer
  </h1>

<!-- PHP -->
<?php
//Essential mode uses the Users table by default. Change the "users" below if you want to use a different table. If you do this, YOU HAVE TO CHANGE THE ROWS FOR BOTH THE MYSQL FETCH AND THE COLUMN NAMES.
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql); 
    $resultCheck = mysqli_num_rows($result);
            echo "<table>";
            //Follow this same format to make a new row. Make the Columns the same order as listed for the mysql fetch below
                   echo "<tr>
                    <th>Identifier</th>
                    <th>License</th>
                    <th>Name</th>
                    <th>Money</th>
                    <th>Bankbalance</th>
                    <th>Job</th>
                    <th>Permission</th>
                    <th>Group</th>
                    <th>Gun License</th>
                    <th>Guns</th>
                    <th>Position</th>
                </tr>";
 
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><th>";
            echo $row['identifier'];
            echo "<th>";
            echo $row['license'];
            echo "<th>";
            echo $row['name'];
            echo "<th>";
            echo $row['money'];
            echo "<th>";
            echo $row['bankbalance'];
            echo "<th>";
            echo $row['job']; //esx probably idek
            echo "<th>";
            echo $row['permission_level'];
            echo "<th>";
            echo $row['group'];
            echo "<th>";
            echo $row['gunlicense']; //esx 
            echo "<th>";
            echo $row['loadout']; //guns (esx)
            echo "<th>";
            echo $row['position'];
            echo "</th></td>";
//To add more columns, follow the same format as shown above. To remove one, make sure to remove it from here and through the Column name (arround line 59)
            

        }    
    }
?>

  </body>
</html>
