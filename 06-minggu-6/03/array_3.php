<!DOCTYPE html>
<head>
    <title>Array 3</title>
</head>
<body>
    <h1>Multidimensional Array</h1>
    <table>
        <tr>
            <th>Judul FIlm</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
            $movies = array(
                array("Avengers: Infinity War", 2018, 8.7),
                array("The Avengers", 2012, 8.1),
                array("Guardians of The Galaxy", 2014, 8.5),
                array("Iron Man", 2008, 7.5)
            );

            foreach ($movies as $key => $movie) {
                echo "<tr>";
                foreach ($movie as $key => $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>