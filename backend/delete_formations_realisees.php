<?php
session_start();

$cnx = mysqli_connect('localhost','root', '');
    mysqli_select_db($cnx,'successway');

     //On vérifie la connexion
     if($cnx->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    echo 'Connexion réussie';



if(isset($_POST['delete']))
{
	$title = $_POST['titre'];
	$title = str_replace("'", "\'", $title);

	$query = "delete from formations_realisees where titre='$title'";

	$exec_query=mysqli_query($cnx,$query);

?>

<script> window.alert("file saved successfully");</script>

<?php
	header('Location: ../modif_formations.php');
}

?>