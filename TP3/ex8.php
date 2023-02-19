<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .container {
        width: 40%;
        margin-top: 20px;
    }

    .result {
        font-weight: bold;
        color: rgba(106, 15, 45, 0.8);
        text-align: center;
        margin-bottom: 0;
        margin-top: 20px;
    }
</style>

<body>

    <form class="container" method="post">
        <div class="form-group col-md-12">
            <label for="fonction">Fonction</label>
            <select name="fonction" class="form-control">
                <option selected>Salarié</option>
                <option>Fonctionnaire</option>
                <option>Profession libérale</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom" required>
            </div>
            <div class="form-group col-md-12">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="montantf">Montant de financement</label>
            <input type="text" class="form-control" name="montantf" placeholder="Montant de financement" required>
        </div>
        <div class="form-group col-md-12">
            <label for="duree">Durée en mois</label>
            <input type="number" min="6" max="300" class="form-control" name="duree" placeholder="Durée en mois"
                required>
        </div>
        <div class="form-group">
            <label for="ddn">Date de naissance</label>
            <input type="date" class="form-control" name="ddn" placeholder="Date de naissance" required>
        </div>
        <div class="form-group col-md-12">
            <label for="salaire">Salaire</label>
            <input type="text" class="form-control" name="salaire" placeholder="Salaire" required>
        </div>
        <div class="form-group col-md-12">
            <label for="montantc">Montant mensuel total des crédits</label>
            <input type="text" class="form-control" name="montantc" placeholder="Montant mensuel total des crédits"
                required>
        </div><br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="assurance" name="f1" value="1" checked>
            <label class="form-check-label" for="assurance">Je veux une assurance.</label>
        </div><br>

        <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </form>


    <?php
    $x = 0;
    if (isset($_POST["button"]) && !is_numeric($_POST["montantf"])) {
        echo '<script> alert("Le montant de financement doit être un nombre réel!") </script>';
        $x = 1;
    }
    if (isset($_POST["button"]) && !is_numeric($_POST["salaire"])) {
        echo '<script> alert("Le salaire doit être un nombre réel!") </script>';
        $x = 1;
    }
    if (isset($_POST["button"]) && !is_numeric($_POST["montantc"])) {
        echo '<script> alert("Le montant mensuel total des crédits doit être un nombre réel!") </script>';
        $x = 1;
    }

    if (isset($_POST["button"]) && $x == 0) {
        echo "<p class='result'>Tableau d'amortissement: </p><br>";
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>