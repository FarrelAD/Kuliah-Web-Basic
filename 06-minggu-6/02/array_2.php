<!DOCTYPE html>
<head>
    <title>Array 2</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            border-radius: 1rem;
            border: 2px solid lightgrey;
            border-collapse: collapse;
        }

        td {
            width: 10rem;
            padding: .5rem;
        }

        #row-name {
            font-weight: bold;
            background-color: lightskyblue;
        }
    </style>
</head>
<body>
    <h1>Data diri Mahasiswa</h1>
    <?php
        $dosen = [
            'nama' => 'Kibar Mustofa',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Laki-laki'
        ];

        echo "
            <table border='1'>
                <tbody>
                    <tr id='row-name'>
                        <td>Nama</td>
                        <td>{$dosen['nama']}</td>
                    </tr>
                    <tr>
                        <td>Domisili</td>
                        <td>{$dosen['domisili']}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{$dosen['jenis_kelamin']}</td>
                    </tr>
                </tbody>
            </table>";
    ?>
</body>
</html>