<?php

session_start();

$connection = mysqli_connect('localhost','root', '');
    mysqli_select_db($connection,'successway');

    $id=$_GET['id'];

    header('content-type: image/jpeg');
    $query = " select image from formations_encours where id='$id'";
    $exec_query = mysqli_query($connection,$query);

    $row = mysqli_fetch_array($exec_query);
    echo $row['image'];
?>