<?php
function OpenConnection()
{
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "crime system";
   
    $conn = new mysqli($dbHost, $dbUser, 
    $dbPassword, $dbName) or die("Connection Failed: %s\n".$conn->error);
  
    return $conn;
}
function CloseConnection($conn)
    {
        $conn -> close();
    }


    $id = $_POST['id'];
    $residence = $_POST['residence'];
    $crimet = $_POST['crimet'];
    $format = $_POST['format'];
    $report1 = $_POST['report1'];
    $report2 = $_POST['report2'];

    $conn = OpenConnection();
    $stmt = $conn->prepare("insert into crime details(crime_type,reported_area,evidence_form,crime_time,report_time,reporter_id) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiii",$crimet, $residence, $format, $report1, $report2, $id);
    $stmt->execute();
    echo"report succesful";
    $stmt->close();
    CloseConnection($conn);

    header("Refresh:1, url=profile.html"); // Redirect User to another page after 3 second









    
    


?>
 