<?php include_once('config/db.php');

// Code de suppression
    if(isset($_GET['delid']))
    {
        $rid=intval($_GET['delid']);
        $sql=mysqli_query($con,"delete from utilisateur where ID=$rid");
        echo "<script>alert('Données supprimées');</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
?>
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
        <link rel="stylesheet" href="css/style2.css">
        <title>Récupérer et afficher l'enregistrement  dans la base de données</title>
    </head>
    <body>
        <div class="container-xl">
            <div class="table-responsive mt-5">
                    <div class="table-wrapper">
                    <div class="table-title mb-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2><b>Gestion des utilisateurs</b></h2>
                            </div>
                            <div class="col-sm-7" align="right">
                                    <a href="inscription.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i><span>Ajouter un nouvel utilisateur</span></a>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Prenom et Nom</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Adresse</th>
                                <th>Date de Creation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $ret=mysqli_query($con,"select * from utilisateur");
                        $cnt=1;
                        $row=mysqli_num_rows($ret);
                        if($row>0){
                        while($row=mysqli_fetch_array($ret)){

                        ?>
                        <!-- requete de récupération -->
                        <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php  echo $row['Prenom'];?> <?php  echo $row['Nom'];?></td>
                            <td><?php  echo $row['Email'];?></td>
                            <td><?php  echo $row['Mobile'];?></td>
                            <td><?php  echo $row['Adresse'];?></td>
                            <td> <?php  echo $row['DateCreation'];?></td>
                            <td>
                                <a href="lire_donnee.php?viewid=<?php echo htmlentities ($row['ID']);?>" class="view" title="Voir" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="modifier.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="index.php?delid=<?php echo ($row['ID']);?>" class="delete" title="Supprimer" data-toggle="tooltip" onclick="return confirm('Voulez-vous vraiment supprimer ?');"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php
                        $cnt=$cnt+1;
                        }
                    } else{
                    ?>
                        <tr>
                            <th style="text-align:center; color:red;" colspan="6">Aucun Enregistrement Trouvé</th>
                        </tr>
                    <?php

                    } ?>

                    </tbody>
                </table>

                </div>
            </div>
        </div>
</body>
</html>
