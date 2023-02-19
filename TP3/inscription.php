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
        width: 50%;
        margin-top: 20px;
    }
    table {
        border: 1px solid;
        margin-bottom: 50px;
    }
    table th, tr, td {
        border: 1px solid;
    }
    table th {
        width: 170px;
        padding-left: 5px;
    }
    table td {
        width: 120px;
        text-align: center;
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
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Civilité</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilite" id="mlle" value="Mlle" required>
                    <label class="form-check-label" for="mlle">Mlle</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilite" id="mme" value="Mme">
                    <label class="form-check-label" for="mme">Mme</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilite" id="m" value="M">
                    <label class="form-check-label" for="m">M</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom" required>
            </div>
            <div class="form-group col-md-6">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
            </div>
        </div>
        <div class="form-group">
            <label for="ddn">Date de naissance</label>
            <input type="date" class="form-control" name="ddn" placeholder="Date de naissance" required>
        </div>
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Formations</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f1" value="Formation 1">
                    <label class="form-check-label" for="f1">Formation 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f2" value="Formation 2">
                    <label class="form-check-label" for="f2">Formation 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f3" value="Formation 3">
                    <label class="form-check-label" for="f3">Formation 3</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f4" value="Formation 4">
                    <label class="form-check-label" for="f4">Formation 4</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f5" value="Formation 5">
                    <label class="form-check-label" for="f5">Formation 5</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f6" value="Formation 6">
                    <label class="form-check-label" for="f6">Formation 6</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f7" value="Formation 7">
                    <label class="form-check-label" for="f7">Formation 7</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f8" value="Formation 8">
                    <label class="form-check-label" for="f8">Formation 8</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f9" value="Formation 9">
                    <label class="form-check-label" for="f9">Formation 9</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="formations[]" name="f10" value="Formation 10">
                    <label class="form-check-label" for="f10">Formation 10</label>
                </div>
            </div>
        </div>
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>
        </div>
        <div class="form-group">
            <label for="rmdp">Réécrire mot de passe</label>
            <input type="password" class="form-control" name="rmdp" placeholder="Réécrire mot de passe" required>
        </div><br>

        <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </form>

    <?php
        $x = 0;
        if (isset($_POST["button"]) && !isset($_POST["formations"])) {
            echo '<script> alert("Champs formations obligatoire à renseigner!") </script>';
            $x = 1;
        }
        if (isset($_POST["button"]) && !empty($_POST["rmdp"]) && !empty($_POST["rmdp"]) && $_POST["mdp"] !== $_POST["rmdp"]) {
            echo '<script> alert("Mots de passes non identiques") </script>';
            $x = 1;
        }

        if (isset($_POST["button"]) && $x == 0) {
            $tableFields = ["Civilité", "Nom", "Prénom", "Date de naissance", "Formations", "Mot de passe"];
            $formFields = ["civilite", "nom", "prenom", "ddn", "formations", "mdp"];

            echo "<p class='result'>Les informations saisies: </p><br>";
            echo "<center><table border='1'>";
            for($i = 0; $i<count($tableFields); $i++) {
                echo "<tr>";
                if ($i == 4) {
                    echo "<th>Formations</th>";
                    echo "<td>";
                    foreach ($_POST[$formFields[$i]] as $f) {
                        echo "$f</br>";
                    }
                    echo "</td>";
                }
                else {
                    echo "<th>$tableFields[$i]</th>";
                    echo "<td>".$_POST[$formFields[$i]]."</td>";
                }
                echo "</tr>";
            }
            echo "</table></center>";
        }
        
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>