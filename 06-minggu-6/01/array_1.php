<!DOCTYPE html>
<head>
    <title>Array 1</title>
</head>
<body>
    <h1>Array Terindeks</h1>
    <?php
        $list_dosen=["Kibar Mustofa", "Farrel AD", "Varizki"];

        // echo $list_dosen[0] . "<br>";
        // echo $list_dosen[1] . "<br>";
        // echo $list_dosen[2] . "<br>";

        // Cara 1
        foreach ($list_dosen as $key => $value) {
            echo $value . "<br>";
        }

        // Cara 2
        for ($i=0; $i < count($list_dosen); $i++) { 
            echo $list_dosen[$i] . "<br>";
        }
    ?>
</body>
</html>