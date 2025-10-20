<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel22";
$conn = mysqli_connect($servername, $username, $password, $database);
/*$sql="CREATE TABLE myguests2(
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT
    CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn,$sql)) {
        echo "table myguests created succesfully";
    } else {
        echo "error ceating table :" . mysqli_error($conn);
    }
    $sql="INSERT INTO myguests (firstname, lastname, email) VALUES ('John','Doe','john@example.com')";
    if (mysqli_query($conn, $sql)){
        echo "new record created succesfully";} else {echo"error:". $sql. "<br>" . mysqli_error($conn);
        } 
        */ $sql = "SELECT id, firstname,lastname FROM myguests123";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
     echo"<table>";
    while($row = mysqli_fetch_row($result)){
        echo "<tr><td>" . $row[0]."</td><td>".
        $row[1]. "</td><td>". $row [2]."</td><tr>";
    }
    echo "</table>";
}else{
    echo "0 results";}
    ?>