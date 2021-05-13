<?php
include('config/db.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
    $fname=$_POST['prenom'];
    $lname=$_POST['nom'];
    $contno=$_POST['mobile'];
    $email=$_POST['email'];
    $add=$_POST['adresse'];


     $query=mysqli_query($con, "update  utilisateur set Prenom='$fname',Nom='$lname', Mobile='$contno', Email='$email', Adresse='$add' where ID='$eid'");

    if ($query) {
    echo "<script>alert('Vous avez mis à jour les données avec succès');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Quelque chose s'est mal passé. Veuillez réessayer');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style4.css">
        <title>Modification des données</title>
    </head>
    <body>
        <div class="signup-form">
            <form  method="POST">
                <?php
                $eid=$_GET['editid'];
                $ret=mysqli_query($con,"select * from utilisateur where ID='$eid'");
                while ($row=mysqli_fetch_array($ret)) {
                ?>
                        <h2>Mettez à jour vos informations</h2>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><input type="text" class="form-control" name="prenom" value="<?php  echo $row['Prenom'];?>" required="true"></div>
                                <div class="col"><input type="text" class="form-control" name="nom" value="<?php  echo $row['Nom'];?>" required="true"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" value="<?php  echo $row['Mobile'];?>" required="true" maxlength="10" pattern="[0-9]+">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="<?php  echo $row['Email'];?>" required="true">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="adresse" required="true"><?php  echo $row['Adresse'];?></textarea>
                        </div>
                    <?php
                }?>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Modifier</button>
                </div>
            </form>

        </div>
    </body>
</html>

