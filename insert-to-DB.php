<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
  $link = mysqli_connect("localhost", "id14561505_seif", "Androidandroidandroid1125-", "id14561505_pigeon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}  

$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$directory=$_POST["directory"];
 
// Attempt insert query execution
$sql = "INSERT INTO users  VALUES ($name,$password,$email,$directory)";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
   

}


?>