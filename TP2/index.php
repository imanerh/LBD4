<!-- 
Program: UM6P-CS
Author: Imane Rahali
Date of Creation: 12/02/2023
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP2</title>
</head>

<style>
    h2 {
        color: rgb(54, 65, 213);
        text-align: center;
        text-decoration: underline;
    }

    .title {
        color: rgb(213, 40, 40);
        text-decoration: underline;
    }

    .colorsTable {
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
    }

    .colorsTable,
    .colorsTable td {
        border: 1px solid;
    }

    .colorsTable td {
        height: 70px;
        width: 150px;
        text-align: center;
    }

    .colorsTable th {
        height: 0;
        width: 0;
        border: none;
    }

    h3 {
        text-align: center;
    }

    .mulTable {
        margin-left: auto;
        margin-right: auto;
    }

    .mulTable td {
        height: 5px;
        width: 50px;
        text-align: center;
    }

    .mulTable,
    .mulTable td {
        border: 1px solid;
    }

    .mulTable tr:nth-child(even) {
        background-color: rgb(255, 200, 140);
    }

    .mulTable tr:nth-child(odd) {
        background-color: rgb(255, 143, 102);
    }

    .mulTable tr:first-child,
    .rows td:first-child {
        background-color: rgb(252, 85, 24);
    }

    .websiteTable {
        margin-left: auto;
        margin-right: auto;
    }

    .websiteTable td {
        width: 50px;
        text-align: center;
    }

    .websiteTable,
    .websiteTable td,
    .websiteTable th {
        border: 1px solid;
    }

    .websiteTable th {
        background-color: rgb(152, 193, 244);
    }
</style>

<body>

    <?php
    echo "<h2>TP2: Les tableaux</h2><br>";
    // Manipulation des tableaux simples
    echo "<b class='title'>I. Manipulation des tableaux simples</b><br><br>";
    // Exercice 1
    $arr = [1, 1, 3, 3, 90, 45, 23, 199, 1001, 199, 45, 10, 1001];
    echo "<b>Exercice 1:</b><br><i>Affichage des éléments du tableau:</i><br>";
    foreach ($arr as $x) {
        echo $x . '-';
    }
    echo "<br><i>Trier le tableau</i><br>";
    sort($arr);
    foreach ($arr as $x) {
        echo $x . '-';
    }
    echo "<br><i>Supprimer les doublons</i><br>";
    $result = array();
    for ($x = 0; $x < count($arr); $x++) {
        if (!in_array($arr[$x], $result)) {
            array_push($result, $arr[$x]);
        }
    }
    foreach ($result as $x) {
        echo $x . '-';
    }
    echo "<br><br>";

    // Exercice 2
    $moisFr = array(1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    echo "<b>Exercice 2:</b><br>";
    echo "<b>1.a.</b><br>";
    for ($x = 1; $x < count($moisFr); $x++) {
        echo $x . " - " . $moisFr[$x] . "<br>";
    }
    echo "<b>1.b.</b><br>";
    foreach ($moisFr as $k => $v) {
        echo $k . " - " . $v . "<br>";
    }
    echo "<b>2.</b> Oui, on peut accéder au mois correspondant en utilisant le résultat de date('m') comme indice du tableau.<br>";
    echo "<b>3. </b>";
    echo $moisFr[intval(date("m"))];

    echo "<br><b>4. </b><br>";
    // $moisFr = array(1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13=>'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    echo "On remarque que ça engendre des erreurs à cause de la discontinuité des nombres constituant les clefs du tableau. Pour résoudre ce problème on peut créer un tableau associatif.<br><br>";

    // Exercice 3
    $notes = [2, 12, 18, 20, 20, 19, 5, 7, 14.5, 15.75, 11.5];
    echo "<b>Exercice 3: </b><br>";
    echo "<b>1. </b>";
    function displayAllElements($arr)
    {
        foreach ($arr as $x) {
            echo $x . " / ";
        }
    }
    displayAllElements($notes);
    echo "<br><b>2. </b>";
    function moyenne($arr)
    {
        $sum = 0;
        foreach ($arr as $note) {
            $sum += $note;
        }
        return $sum / count($arr);
    }
    echo "Moyenne = " . moyenne($notes);
    echo "<br><b>3. </b>";
    function greaterThan10($arr)
    {
        $count = 0;
        foreach ($arr as $note) {
            if ($note > 10) {
                $count += 1;
            }
        }
        return $count;
    }
    echo "Le nombre d'étudiants qui ont une note > 10 est: " . greaterThan10($notes);
    echo "<br><b>4. </b>";
    function equals20($arr)
    {
        $count = 0;
        foreach ($arr as $note) {
            if ($note === 20) {
                $count += 1;
            }
        }
        return $count;
    }
    echo "Le nombre d'étudiants qui ont une note = 20 est: " . equals20($notes);
    echo "<br><b>5. </b>";
    function bubbleSort($arr)
    { // BubbleSort
        $arr2 = $arr; // No changes are made to the original array
        for ($i = 0; $i < count($arr2); $i++) {
            $param = 0;
            for ($j = 0; $j < count($arr2) - 1 - $i; $j++) {
                if ($arr2[$j] < $arr2[$j + 1]) {
                    // Swap
                    $temp = $arr2[$j];
                    $arr2[$j] = $arr2[$j + 1];
                    $arr2[$j + 1] = $temp;
                    $param = 1;
                }
            }
            if ($param == 0) {
                break;
            }
        }
        return $arr2;
    }
    foreach (bubbleSort($notes) as $x) {
        echo $x . " / ";
    }
    echo "<br><b>6. </b>";
    ?>

    <form method="post">
        <label>Valeur</label>
        <input type="text" name="valeur" />
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    function inArray($arr, $value)
    {
        $indexes = array();
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $value) {
                array_push($indexes, $i);
            }
        }
        if (count($indexes) == 0) {
            return "Nonexistent value";
        } else {
            $result = "Oui, à l'indice ";
            foreach ($indexes as $x) {
                $result = $result . "[" . $x . "]";
            }
            return $result;
        }
    }
    if (in_array("valeur", array_keys($_POST))) {
        echo "Valeur à chercher: " . $_POST["valeur"] . "<br>Résultat: " . inArray($notes, $_POST["valeur"]);
    }


    // Exercice 4
    echo "<br><br><b>Exercice 4:</b><br>";
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    function reverse($arr)
    {
        $arr2 = $arr; // No changes are made to the original array
        $start = 0;
        $end = count($arr2) - 1;
        while ($start < $end) {
            $temp = $arr2[$start];
            $arr2[$start] = $arr2[$end];
            $arr2[$end] = $temp;
            $start += 1;
            $end -= 1;
        }
        return $arr2;
    }
    echo "Original Array: ";
    foreach ($arr as $x) {
        echo $x . " / ";
    }
    echo "<br>Reversed array: ";
    foreach (reverse($arr) as $x) {
        echo $x . " / ";
    }

    // Exercice 5
    echo "<br><br><b>Exercice 5:</b><br>";
    $colors = ["yellow", "blue", "red", "purple", "black", "orange", "cian", "aqua", "bisque", "blueviolet"];
    echo "<table class='colorsTable'>
            <tr>
                <th colspan=5>Tableau de couleur</th>
            </tr>
            <tr>
                <td bgcolor=" . $colors[0] . "></td>
                <td bgcolor=" . $colors[1] . "></td>
                <td bgcolor=" . $colors[2] . "></td>
                <td bgcolor=" . $colors[3] . "></td>
                <td bgcolor=" . $colors[4] . "></td>
            </tr>
            <tr>
                <td bgcolor=" . $colors[5] . "></td>
                <td bgcolor=" . $colors[6] . "></td>
                <td bgcolor=" . $colors[7] . "></td>
                <td bgcolor=" . $colors[8] . "></td>
                <td bgcolor=" . $colors[9] . "></td>
            </tr>
        </table>";

    echo "<b>2. </b>";
    ?>

    <form method="post">
        <label>Couleur</label>
        <input type="text" name="color2" />
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

    if (in_array("color2", array_keys($_POST))) {
        echo "Couleur à chercher: " . $_POST["color2"] . "<br>Résultat: ";
        if (in_array(strtolower($_POST["color2"]), $colors)) {
            echo "Yes";
        } else {
            echo "No";
        }
    }
    echo "<br><b>3. </b>";
    ?>

    <form method="post">
        <label>Couleur</label>
        <input type="text" name="color3" />
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

    if (in_array("color3", array_keys($_POST))) {
        echo "Couleur à chercher: " . $_POST["color3"] . "<br>Résultat: ";
        if (
            !is_null(array_search(strtolower($_POST["color3"]), $colors))
        ) {
            echo "Oui, à l'indice " . array_search(strtolower($_POST["color3"]), $colors);
        } else {
            echo "No";
        }
    }
    // Exercice 6
    echo "<br><br><b>Exercice 6:</b><br>";
    $emails = ["imane@gmail.com", "anas@um6p.ma", "saad@gmail.com", "ghizlane@um6p.ma", "chaymae@gmail.com"];
    echo "* Noms de domaine des addresses: <br>";
    $domains = array(); // Array containing domains of each adress. count(domains) = count(emails)
    foreach ($emails as $m) {
        array_push($domains, explode("@", $m)[1]);
    }
    $domainsUnique = array_unique($domains); // Array containing only unique values of the $domains array
    foreach ($domainsUnique as $d) {
        echo $d . "<br>";
    }
    echo "* Ocuurences de chaque domaine: <br>";
    $domainCount = array_count_values($domains);
    foreach ($domainCount as $k => $v) {
        echo $k . " => " . $v . "<br>";
    }

    // Manipulation des tableaux associatifs
    echo "<br><br><b class='title'>I. Manipulation des tableaux associatifs</b><br><br>";
    // Exercice 1
    echo "<b>Exercice 1:</b><br>";
    $ages = array(
        "imane" => 19,
        "anas" => 22,
        "ghizlane" => 33,
        "saad" => 40
    );
    echo "<b>2. </b><br>";
    foreach ($ages as $k => $v) {
        echo $k . " a " . $v . " ans<br>";
    }
    echo "<b>3. </b><br>";
    echo "<table border='1'><tr><td><b>Nom</b></td><td><b>Age</b></td></tr>";
    foreach ($ages as $k => $v) {
        echo "<tr>";
        echo "<td>$k</td>";
        echo "<td>$v</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Exercice 2
    echo "<br><br><b>Exercice 2:</b><br>";
    $tab = array(
        "PHP" => "http://www.php.net",
        "MySQL" => "http://www.mysql.o rg",
        "SQLite" => "http://www.sqlite.org",
        "HTML" => "https://www.w3schools.com/html/default.asp",
        "CSS" => "https://www.w3schools.com/css/default.asp"
    );
    $randomKeys = array_rand($tab, 2);
    echo $tab[$randomKeys[0]] . "<br>";
    echo $tab[$randomKeys[1]] . "<br>";

    // Exercice 3
    echo "<br><br><b>Exercice 3:</b><br>";
    $arr = array(
        "Ahmed" => 14,
        "Joudia" => 19,
        "Samir" => 14,
        "Yasser" => 14.5,
        "Aya" => 12,
        "Ilham" => 16,
        "Yassine" => 17
    );
    echo "<b>2. </b><br>";
    foreach ($arr as $k => $v) {
        echo "Nom: $k, note = $v<br>";
    }
    echo "<b>3. </b><br>";
    echo "<table border='1'><tr><td><b>Nom</b></td><td><b>Note</b></td></tr>";
    foreach ($arr as $k => $v) {
        echo "<tr>";
        echo "<td>$k</td>";
        echo "<td>$v</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<b>4. </b>";
    $maxNote = 0;
    $maxKey;
    foreach ($arr as $k => $v) {
        if ($v > $maxNote) {
            $maxNote = $v;
            $maxKey = $k;
        }
    }
    echo "Le nom de l'étudiant ayant la note la plus élevée est: $maxKey<br>";
    echo "<b>5. </b>";
    $minNote = 20;
    $minKey;
    foreach ($arr as $k => $v) {
        if ($v < $minNote) {
            $minNote = $v;
            $minKey = $k;
        }
    }
    echo "Le nom de l'étudiant ayant la note minimale est: $minKey<br>";
    echo "<b>6. </b>Moyenne = " . moyenne($arr);


    // Exercice 4
    echo "<br><br><b>Exercice 4:</b><br>";
    echo "<h3>Tableau de multiplication</h3>";
    echo "<table class='mulTable'><tr><td></td>";
    for ($i = 2; $i <= 10; $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr>";
    for ($i = 2; $i <= 10; $i++) {
        echo "<tr class='rows'>";
        echo "<td>$i</td>";
        for ($j = 2; $j <= 10; $j++) {
            echo "<td>";
            echo $i * $j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Exercice 5
    echo "<br><br><b>Exercice 5:</b><br>";
    $capitales = array(
        "maroc" => "Rabat",
        "allemagne" => "Berlin",
        "serbie" => "Belgrade",
        "brésil" => "Brasilia",
        "slovaquie" => "Bratislava",
        "italie" => "Rome",
        "venezuela" => "Caracas",
        "moldavie" => "Chisinau",
        "guyana" => "Georgetown",
        "viêt nam" => "Hanoï",
        "zimbabwe" => "Harare",
        "cuba" => "La Havane",
        "pays-bas" => "La Haye",
        "finlande" => "Helsinki"
    );
    echo "<b>1. </b><br>";
    foreach ($capitales as $k => $v) {
        echo "$k => $v<br>";
    }
    echo "<b>2. </b><br>";
    echo "<table border='1'><tr><td><b>Pays</b></td><td><b>Capitale</b></td></tr>";
    foreach ($capitales as $k => $v) {
        echo "<tr>";
        echo "<td>" . ucwords($k) . "</td>";
        echo "<td>$v</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<b>3. </b>";
    ?>

    <form method="post">
        <label>Pays</label>
        <input type="text" name="pays">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (in_array("pays", array_keys($_POST))) {
        echo "Résultat: " . $capitales[strtolower($_POST['pays'])];
    }


    // Exercice 6
    echo "<br><br><b>Exercice 6:</b><br>";
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

    echo "<b>1. </b>";
    echo "<table border='1' class='websiteTable'>";
    foreach ($websites as $category => $nestedArray) {
        echo "<tr>";
        echo "<td width='50' rowspan=";
        echo count($websites[$category]) + 1;
        echo ">$category</td>";
        echo "<th>Nom</th><th>Lien</th><th>Avis</th>";

        foreach ($nestedArray as $subcategory => $details) {
            echo "<tr>";
            echo "<td>$subcategory</td>";
            foreach ($details as $d) {
                echo "<td>$d</td>";
            }
            echo "</tr>";
        }

        echo "</tr>";
    }
    echo "</table>";
    echo "<b>2. </b>";
    foreach ($websites as $category => $nestedArray) {
        echo "* $category:<br>";
        foreach ($nestedArray as $subcategory => $details) {
            echo "- $subcategory : $details[0]<br>";
        }
    }
    echo "<b>3. </b><br>";
    foreach ($websites as $category => $nestedArray) {
        echo "> $category:<br>";
        $ratingArr = array();
        foreach ($nestedArray as $subcategory => $details) {
            if (!in_array($details[1], array_keys($ratingArr))) {
                $ratingArr[$details[1]] = array();
            }
            array_push($ratingArr[$details[1]], $details[0]);
        }
        foreach ($ratingArr as $rating => $sites) {
            echo "- $rating: <br>";
            foreach ($sites as $s) {
                echo "$s<br>";
            }
        }
    }

    // Exercice 7
    echo "<br><br><b>Exercice 7:</b><br>";
    $students = array(
        "Et123" => array(
            "Nom" => "AB",
            "Prénom" => "BC",
            "Moyenne" => 17
        ),
        "Et676" => array(
            "Nom" => "BC",
            "Prénom" => "BD",
            "Moyenne" => 12
        ),
        "Et998" => array(
            "Nom" => "CD",
            "Prénom" => "CE",
            "Moyenne" => 9
        ),
        "Et764" => array(
            "Nom" => "DE",
            "Prénom" => "DF",
            "Moyenne" => 16.5
        ),
    );
    echo "<b>1. </b><br>";
    foreach ($students as $s => $details) {
        echo "> Code: $s<br>";
        foreach ($details as $k => $v) {
            echo "$k: $v<br>";
        }
    }
    echo "<b>2. </b>";
    $maxNote = 0;
    $maxStudentCode;
    foreach ($students as $s => $details) {
        if ($details["Moyenne"] > $maxNote) {
            $maxNote = $details["Moyenne"];
            $maxStudentCode = $s;
        }
    }
    echo "L'étudiant ayant la note la plus élevée: <br>";
    echo "> Code: $maxStudentCode<br>";
    foreach ($students[$maxStudentCode] as $k => $v) {
        echo "> $k: $v<br>";
    }
    echo "<b>3. </b>";
    $minNote = 20;
    $minStudentCode;
    foreach ($students as $s => $details) {
        if ($details["Moyenne"] < $minNote& $details["Moyenne"] >= 10) {
            $minNote = $details["Moyenne"];
            $minStudentCode = $s;
        }
    }
    echo "L'étudiant ayant la note min mais qui a validée l'année: <br>";
    echo "> Code: $minStudentCode<br>";
    foreach ($students[$minStudentCode] as $k => $v) {
        echo "> $k: $v<br>";
    }
    echo "<b>4. </b>";
    $repeatersCodes = array();
    foreach ($students as $s => $details) {
        if ($details["Moyenne"] < 10) {
            array_push($repeatersCodes, $s);
        }
    }
    echo "Les étudiants n'ayant pas réussi l'année (note < 10): <br>";
    foreach ($repeatersCodes as $r) {
        echo "> Code: $r<br>";
        foreach ($students[$r] as $k => $v) {
            echo "$k: $v<br>";
        }
    }
    // Exercice 8
    echo "<br><br><b>Exercice 8:</b><br>";
    // En raison de simplification, le tableau suivant comprend uniquement 3 modules mais le code qui suit traite le cas général (n'importe quel nombre de modules)
    $students = array(
        "Et123" => array(
            "Nom" => "AB",
            "Prénom" => "BC",
            "Notes" => array(
                "Module1" => 12,
                "Module2" => 13,
                "Module3" => 16,
            )
        ),
        "Et676" => array(
            "Nom" => "BC",
            "Prénom" => "BD",
            "Notes" => array(
                "Module1" => 10,
                "Module2" => 8,
                "Module3" => 5,
            )
        ),
        "Et998" => array(
            "Nom" => "CD",
            "Prénom" => "CE",
            "Notes" => array(
                "Module1" => 20,
                "Module2" => 18,
                "Module3" => 19.5,
            )
        ),
        "Et764" => array(
            "Nom" => "DE",
            "Prénom" => "DF",
            "Notes" => array(
                "Module1" => 15,
                "Module2" => 10.25,
                "Module3" => 14,
            )
        ),
    );
    echo "<b>2. </b>";
    foreach ($students as $s => $details) {
        echo "> Code: $s<br>";
        $minNote = 20;
        $minModule;
        $maxNote = 0;
        $maxModule;
        foreach ($details["Notes"] as $name => $note) {
            if ($note < $minNote) {
                $minNote = $note;
                $minModule = $name;
            }
            if ($note > $maxNote) {
                $maxNote = $note;
                $maxModule = $name;
            }
        }
        echo "Nom du module ayant eu la note min: $minModule, Note: $minNote<br>";
        echo "Nom du module ayant eu la note max: $maxModule, Note: $maxNote<br>";
    }
    echo "<br><b>3. </b>";
    $modulesNbre = count($students[array_keys($students)[0]]["Notes"]);
    $modulesNames = array_keys($students[array_keys($students)[0]]["Notes"]);
    for ($i = 0; $i < $modulesNbre; $i++) {
        $minModule = 20;
        $minStudentCode;
        $maxModule = 0;
        $maxStudentCode;
        foreach ($students as $s => $details) {
            $noteModule = $details["Notes"][$modulesNames[$i]];
            if ($noteModule < $minModule) {
                $minModule = $noteModule;
                $minStudentCode = $s;
            }
            if ($noteModule > $maxModule) {
                $maxModule = $noteModule;
                $maxStudentCode = $s;
            }
        }
        echo "> Module name: $modulesNames[$i]<br>";
        echo " Note min: $minModule, Etudiant: $minStudentCode<br>";
        echo " Note max: $maxModule, Etudiant: $maxStudentCode<br>";
    }
    echo "<br><b>4. </b>";
    foreach ($students as $s => $details) {
        echo "> Code: $s<br>";
        $moyenne = 0;
        foreach ($details["Notes"] as $name => $note) {
            $moyenne += $note;
        }
        $moyenne /= count($details["Notes"]);
        echo "Moyenne: $moyenne<br>";
        if ($moyenne >= 10) {
            echo "Décision: Année réussie<br>";
        } else {
            echo "Décision: Année non réussie<br>";
        }
    }


    ?>



</body>

</html>