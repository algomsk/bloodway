<?php
 
date_default_timezone_set('Asia/Calcutta'); 
  
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "blood_bank";

        $conn = new mysqli($servername, $username, $password, $dbname);  
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
 
    $oq = mysqli_real_escape_string($conn, $_POST['oq']);
    $ow = mysqli_real_escape_string($conn, $_POST['ow']);
    $aq = mysqli_real_escape_string($conn, $_POST['aq']);
    $aw = mysqli_real_escape_string($conn, $_POST['aw']);  
    $bq = mysqli_real_escape_string($conn, $_POST['bq']);
    $bw = mysqli_real_escape_string($conn, $_POST['bw']);
    $abq = mysqli_real_escape_string($conn, $_POST['abq']);
    $abw = mysqli_real_escape_string($conn, $_POST['abw']);

$id = mysqli_real_escape_string($conn, $_POST['id']);

$sql = " UPDATE avail SET oq='$oq', ow='$ow', aq='$aq', aw='$aw', bq='$bq'
         , bw='$bw', abq='$abq', abw='$abw' where ho='$id'";
    

if ($conn->query($sql) === TRUE) {
 
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='dashboard-messages.php';
    </SCRIPT>");
       
} else {

            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Error Occured !'); 
    </SCRIPT>");
}

$conn->close();

?>