<?php
session_start();

$cnx = mysqli_connect('localhost','root', '');
    mysqli_select_db($cnx,'successway');

     //On vérifie la connexion
     if($cnx->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    echo 'Connexion réussie';


//test base de données
/* 
    $query = "insert into formations_realisees (titre,description) VALUES ('formation','this is a description')";
    if (mysqli_query($cnx, $query)) {
        echo " Nouveau enregistrement créé avec succès";
  } else {
        echo " Erreur : " . $query . "<br>" . mysqli_error($cnx);
  }
*/

if(isset($_POST['upload']))
{
	$title = $_POST['titre'];
	$title = str_replace("'", "\'", $title);
	$description = $_POST['description'];
	$description = str_replace("'", "\'", $description);	
	$namef=$_FILES['image']['name'];
	$dataf=file_get_contents($_FILES['image']['tmp_name']);

	$query = "insert into actualites (image,titre,description) VALUES (0x".bin2hex($dataf).",'$title','$description')";

	$exec_query=mysqli_query($cnx,$query);

	?>

<script> window.alert("file saved successfully");</script>
	<?php
	header('Location: ../modif_actualites.php');
}

?>