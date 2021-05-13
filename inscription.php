<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
            <title>INSCRIPTION</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <div class="signup-form">
                <form action="fonction/traitement_inscription.php" method="post">
                    <h2>INSCRIPTION</h2>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="prenom" placeholder="Entrez votre Prénom" required></div>
                            <div class="col"><input type="text" class="form-control" name="nom" placeholder="Entrez votre Nom" required></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" placeholder="Entrez votre Mobile" required maxlength="10" pattern="[0-9]+">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Entrez votre mail" required>
                    </div>
                    <div class="form-group">
                        <textarea name="adresse" class="form-control" placeholder="Entrez votre adresse" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                            Valider
                        </button>
                    </div>
                </form>
                <div class="text-center">Voir les données insérées  <a href="index.php">Voir</a></div>
            </div>
    </body>
</html>
