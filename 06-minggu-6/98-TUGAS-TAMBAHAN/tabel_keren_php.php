<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Keren!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Array model pertama
        // $data_mahasiswa = [
        //     ["Adi", 20, "TI-2C", "New York City"],
        //     ["Budi", 21, "TI-2B", "Los Angeles"],
        //     ["Citra", 22, "TI-2A", "Chicago"],
        //     ["Dewi", 23, "TI-3A", "Houston"],
        //     ["Eka", 20, "TI-1A", "Miami"]
        // ];

        // Array model kedua
        $data_mahasiswa = [
            "nama" => ["Adi", "Budi", "Citra", "Dewi", "Eka"],
            "umur" => [20, 21, 22, 23, 20],
            "kelas" => ["TI-2C", "TI-2B", "TI-2A", "TI-3A", "TI-1A"],
            "alamat" => ["New York City", "Los Angeles", "Chicago", "Houston", "Miami"]
        ]
    ?>
    <h1 id="web-title">Data mahasiswa</h1>

    <div id="trigger-data-show">Lihat data mahasiswa</div>

    <div id="data-container">
        <table id="table-data" border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Logic untuk jenis array pertama
                    // foreach ($data_mahasiswa as $key => $mahasiswa) {
                    //     echo "
                    //         <tr>
                    //             <td>$mahasiswa[0]</td>
                    //             <td>$mahasiswa[1]</td>
                    //             <td>$mahasiswa[2]</td>
                    //             <td>$mahasiswa[3]</td>
                    //         </tr>";
                    // }

                    // Logic untuk jenis array kedua
                    for ($i=0; $i < count($data_mahasiswa['nama']); $i++) { 
                        echo "
                            <tr>
                                <td>" . $data_mahasiswa['nama'][$i] . "</td>
                                <td>" . $data_mahasiswa['umur'][$i] . "</td>
                                <td>" . $data_mahasiswa['kelas'][$i] . "</td>
                                <td>" . $data_mahasiswa['alamat'][$i] . "</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>

        <h3>Rata-rata umur siswa:
            <?php
                $total_umur = 0;

                // Logic untuk jenis array pertama
                // foreach ($data_mahasiswa as $key => $mahasiswa) {
                //     $total_umur += $mahasiswa[1];
                // }

                // Logic untuk jenis array kedua
                foreach ($data_mahasiswa['umur'] as $key => $value) {
                    $total_umur += $value;
                }

                echo $total_umur / count($data_mahasiswa);
            ?>
            tahun
        </h3>
    </div>

    <script>
        $(document).ready(() => {
            $('#trigger-data-show').click(() => {
                $('#data-container').slideToggle('slow')
            })
        })
    </script>
</body>
</html>
