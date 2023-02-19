<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP3</title>
</head>


<body>

    <form method="post">
        <label for="domaine">Choisissez le domaine de votre intérêt:</label><br>
        <input type="radio" name="domaine" value="Web">
        <label for="Web">Web</label><br>
        <input type="radio" name="domaine" value="DB">
        <label for="DB">DB</label><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        $websites = array(
            "Web" => array(
                "PHP" => array("http://www.php.net", "*****"),
                "HTML" => array("https://www.w3schools.com/html/default.asp", "****"),
                "Javascript" => array("http://www.javascript.com", "**"),
                "CSS" => array("https://www.w3schools.com/css/", "****")
            ),
            "DB" => array(
                "MySQL" => array("http://www.mysql.org", "*****"),
                "PostgreSQL" => array("https://www.postgresql.org", "*****"),
                "Oracle" => array("https://www.oracle.com/", "****"),
                "DB2" => array("https://www.ibm.com/products/db2", "****")
            )
        );
        if (in_array("domaine", array_keys($_POST))) {
            echo "<center><table border='1'>";
            echo "<th>Nom</th><th>Lien</th><th>Avis</th>";
            foreach ($websites[$_POST["domaine"]] as $subcategory => $details) {
                echo "<tr>";
                echo "<td>$subcategory</td>";
                for ($i = 0; $i < count($details); $i++) {
                    echo "<td>";
                    if ($i === 0) {
                        echo "<a href='$details[$i]'>$details[$i]</a>";
                    } else {
                        echo "$details[$i]";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table></center>";
        }
    ?>

</body>
</html>