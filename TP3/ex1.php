<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP3</title>
</head>


<body>

    <?php
    echo "Students:<br>";
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

    foreach ($students as $code => $info) {
        echo "<a href='show_student_infos.php?code=$code'>$code</a><br>";
    }
    ?>

</body>

</html>