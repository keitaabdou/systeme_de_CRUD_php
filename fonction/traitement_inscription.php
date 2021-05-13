<?php include_once('../config/db.php'); ?>
<?php

//verification des donnée dans le formulaire
if(isset($_POST['submit'])){

    $Prenom=$_POST['prenom'];
    $Nom=$_POST['nom'];
    $Mobile=$_POST['mobile'];
    $Email=$_POST['email'];
    $Adresse=$_POST['adresse'];

    //requete d'insertion
    $query=mysqli_query($con, "INSERT INTO utilisateur(prenom, nom, mobile, email, adresse) VALUE('$Prenom','$Nom','$Mobile','$Email','$Adresse')");

    if($query){

        echo "<script>alert('Vous avez correctement inséré les données');</script>";
        echo "<script type='text/javascript'>document.location = '../index.php';</script>";
    }else{
        echo "<script>alert('Quelque chose s'est mal passé. Veuillez réessayer');</script>";
    }
}

?>
