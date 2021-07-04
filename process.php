<?php
session_start();
  $username=$_POST['user'];
  $password=$_POST['password'];

  $username=stripcslashes($username);
  $password=stripcslashes($password);

  $username=mysql_real_escape_string($username);
  $password=mysql_real_escape_string($password);

  mysql_connect("localhost","root","");
  mysql_select_db("success");

  $result=mysql_query("select * from formateur where user='$username' and password='$password'")
       or die("failed to query database".mysql_error());
  $row=mysql_fetch_array($result);
  if ($row['user']==$username && $row['password']==$password){
  	header('location:index.php');
  } else {
    header('location:adminformateur.php');
    ?>
    <div class="alert">
    <?php echo 'erreur' ?>
    </div>
    <?php
  }
  
?>