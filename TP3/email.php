<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP3</title>
</head>
<body>

    <?php 

        echo "<b>From: </b>".$_POST['nom']." ".$_POST["prenom"];
        echo " {".$_POST["email"]."}<br>";
        echo "<b>To: </b>";
        if ($_POST["dest"] == "sav") {
            echo "Service après-vente";
        }
        else if ($_POST["dest"] == "st") {
            echo "Service technique";
        }
        echo "<br><br>";
        echo "<b>Subject: </b>".$_POST["objet"]."<br><br>";
        echo $_POST["message"]."<br>";

    
    ?>

</body>
</html>