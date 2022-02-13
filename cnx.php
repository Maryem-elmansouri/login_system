<?php
session_start();
if(isset($_POST['login'])){
  //connection au serveur
  $username=$_POST['username'];
  $password=$_POST['password'];
  $conn=mysqli_connect('localhost','root','','ensat')  ;
  if(!$conn){
      echo " :connection failed !".mysqli_connect_error();
  } 


/* requête à executer */
$sql = "SELECT name, password
 FROM etudiant
 WHERE name ='".$username."' AND password = '".$password."'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
while($row){
  $login==1;

  $_SESSION['username']=$_POST['username'];
  header('location:logout.php');

}
echo "login ou mot de pass incorrect! ";
}
?>

  
