<?php include_once('config/db.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style3.css">
    <title>Regarder les données</title>
</head>
    <body>
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2><b>Détails de l'utilisateur</b></h2>
                            </div>
                        </div>
                    </div>
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">

                        <tbody>
                            <?php
                                $vid=$_GET['viewid'];
                                $ret=mysqli_query($con,"select * from utilisateur where ID =$vid");
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {

                            ?>
                            <tr>
                                <th>Prénom</th>
                                <td><?php  echo $row['Prenom'];?></td>
                                <th>Nom</th>
                                <td><?php  echo $row['Nom'];?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php  echo $row['Email'];?></td>
                                <th>Mobile</th>
                                <td><?php  echo $row['Mobile'];?></td>
                            </tr>
                            <tr>
                                <th>Adresse</th>
                                <td><?php  echo $row['Adresse'];?></td>
                                <th>Date de Creation</th>
                                <td><?php  echo $row['DateCreation'];?></td>
                            </tr>
                            <?php
                            $cnt=$cnt+1;
                            }?>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="text-center">
                 <a href="index.php"><button class="btn btn-primary">Revenir a la page d'accueil</button></a>
            </div>
        </div>
    </body>
</html>
