<?php

session_start();
if(isset($_POST['signin'])){
    $nometud=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','ensat');
    if(!$conn){
   echo "registration failed:try again!";
    }
    $req="INSERT INTO etudiant(name,password) VALUES('$nometud','$password') ";
// execution de la requete 
  $result=mysqli_query($conn,$req);
  if($result){
      echo "inscription reussite! connectez vous sur la page LOGIN";
     
  }  else {
      echo "error:try again!". mysqli_error($conn);
  }
}
?>
