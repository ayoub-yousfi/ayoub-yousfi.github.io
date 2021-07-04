<?php
      
if (isset($_POST['submit']))
{
   /* on test si les champ sont bien remplis */
    if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['confirmpassword']))
    {
        /* on test si le mdp contient bien au moins 6 caractère */
        if (strlen($_POST['password'])>=6)
        {
            /* on test si les deux mdp sont bien identique */
            if ($_POST['password']==$_POST['confirmpassword'])
            {
                // On crypte le mot de passe
                $_POST['password']= md5($_POST['password']);
                // on se connecte à MySQL et on sélectionne la base
                $c = new mysqli("127.0.0.1","root","","sucess");
                //On créé la requête
                $sql = "INSERT INTO inscrit VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."','".$_POST['password']."')";
                 
                /* execute et affiche l'erreur mysql si elle se produit */
                if(!$c->query($sql))
                {
                    printf("Message d'erreur : %s\n", $c->error);
                }
            // on ferme la connexion
            mysqli_close($c);
            }
            else echo "Les mots de passe ne sont pas identiques";
        }
        else echo "Le mot de passe est trop court !";
    }
    else echo "Veuillez saisir tous les champs !";
}
?>