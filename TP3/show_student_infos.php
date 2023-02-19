<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP3</title>
</head>
<body>

    <?php 
        $students = array(
            "Et123" => array(
                "Nom" => "Amine",
                "Prénom" => "xyz",
                "Notes" => array(
                    "Module1" => 12,
                    "Module2" => 13,
                    "Module3" => 16,
                )
            ),
            "Et676" => array(
                "Nom" => "Ilyas",
                "Prénom" => "bdf",
                "Notes" => array(
                    "Module1" => 10,
                    "Module2" => 8,
                    "Module3" => 5,
                )
            ),
            "Et998" => array(
                "Nom" => "Anas",
                "Prénom" => "est",
                "Notes" => array(
                    "Module1" => 20,
                    "Module2" => 18,
                    "Module3" => 19.5,
                )
            ),
            "Et764" => array(
                "Nom" => "imane",
                "Prénom" => "dfs",
                "Notes" => array(
                    "Module1" => 15,
                    "Module2" => 10.25,
                    "Module3" => 14,
                )
            ),
        );
        

        echo "<table border='1'><tr><th rowspan=2>Code</th><th rowspan=2>Nom</th><th rowspan=2>Prénom</th><th rowspan=1 colspan=".count($students[$_GET['code']]["Notes"]).">Notes</th></tr>";

        foreach ($students[$_GET['code']]["Notes"] as $name=>$note) {
            echo "<td>$name</td>";
        }
        echo "<tr><td>".$_GET['code']."</td>";
        foreach ($students[$_GET['code']] as $k=>$v) {
            if ($k!="Notes") {
                echo "<td>$v</td>";
            }
            else {
                foreach ($v as $note) {
                    echo "<td>$note</td>";
                }
            }
            
        }
        echo "</tr>";
        echo "</table>";
     
    
    ?>

</body>
</html>