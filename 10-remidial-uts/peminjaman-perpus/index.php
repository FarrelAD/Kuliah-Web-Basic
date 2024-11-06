<?php

require_once __DIR__ . "/controller/get_peminjaman_data.php";
require_once __DIR__ . "/controller/get_pengguna_data.php";
require_once __DIR__ . "/controller/get_buku_data.php";

$data_peminjaman = getPeminjamanData();
$data_pengguna = getPenggunaData();
$data_buku = getBukuData();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1 class="fw-bold">Sistem Peminjaman Buku Perpustakaan</h1>
        <br><br>
        <button 
            type="button" 
            id="buat-peminjaman-btn" 
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#create-modal"
            >Buat Peminjaman Baru
        </button>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku yang dipinjam</th>
                    <th>Waktu pengembalian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_peminjaman as $key => $row) { ?>
                    <tr>
                        <td class="id-peminjaman-col"><?php echo $row['id'] ?></td>
                        <td class="peminjam-col"><?php echo $row['nama'] ?></td>
                        <td class="buku-dipinjam-col"><?php echo $row['judul'] ?></td>
                        <td class="pengembalian-col"><?php echo $row['waktu_pengembalian'] ?></td>
                        <td class="aksi-col">
                            <button 
                                class="edit-btn btn btn-success" 
                                data-bs-toggle="modal"
                                data-bs-target="#edit-modal"
                                >Edit
                            </button>
                            <button 
                                class="delete-btn btn btn-danger"
                                data-bs-toggle="modal"
                                data-bs-target="#delete-modal"
                                >Hapus
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>



    <!-- BOOTSTRAP MODAL -->
    
    <!-- CREATE MODAL -->
    <div class="modal fade" id="create-modal" tabindex="-1" aria-labelledby="create-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="create-modal-title">Penambahan data peminjaman baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="controller/tambah_data.php" method="post">
                        <label for="input-nama-peminjam" class="form-label">Nama peminjam</label>
                        <select name="id-peminjam" id="input-nama-peminjam" class="form-select">
                            <?php foreach ($data_pengguna as $key => $row) { ?>
                                <option value="<?php echo $row['id'] ?>">
                                    <?php echo $row['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label for="input-buku-dipinjam" class="form-label">Buku yang dipinjam</label>
                        <select name="id-buku" id="input-judul-buku" class="form-select">
                            <?php foreach ($data_buku as $key => $row) { ?>
                                <option value="<?php echo $row['id_buku'] ?>">
                                    <?php echo $row['judul'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label for="input-durasi-pinjam" class="form-label">Durasi pinjam</label>
                        <select name="durasi-pinjam" id="input-durasi-pinjam" class="form-select">
                            <option value="3">3 hari</option>
                            <option value="7">7 hari</option>
                            <option value="14">14 hari</option>
                        </select>
                        <input type="submit" value="Kirim" class="btn btn-primary mt-4">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="edit-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit-modal-title">Perbarui Data Peminjaman</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="controller/edit_peminjaman_data.php">
                        <label for="input-nama-peminjam" class="form-label">Nama peminjam</label>
                        <select name="id-peminjam" id="input-update-nama-peminjam" class="form-select">
                            <?php foreach ($data_pengguna as $key => $row) { ?>
                                <option value="<?php echo $row['id'] ?>">
                                    <?php echo $row['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label for="input-buku-dipinjam" class="form-label">Buku yang dipinjam</label>
                        <select name="id-buku" id="input-update-judul-buku" class="form-select">
                            <?php foreach ($data_buku as $key => $row) { ?>
                                <option value="<?php echo $row['id_buku'] ?>">
                                    <?php echo $row['judul'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label for="input-durasi-pinjam" class="form-label">Durasi pinjam</label>
                        <select name="durasi-pinjam" id="input-update-durasi-pinjam" class="form-select">
                            <option value="3">3 hari</option>
                            <option value="7">7 hari</option>
                            <option value="14">14 hari</option>
                        </select>
                        <input type="submit" value="Perbarui" class="konfirmasi-update-data-btn btn btn-primary mt-4">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="delete-modal-title">Konfirmasi Hapus data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="konfirmasi-delete-data-btn btn btn-danger">Iya</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        $(document).ready(() => {
            let idDataTerpilih = -1

            $('.edit-btn').click(function() {
                idDataTerpilih = parseInt($(this).closest('tr').find('.id-peminjaman-col').text(), 10)

                const namaPeminjam = $(this).closest('tr').find('.peminjam-col').text()
                const judulBuku = $(this).closest('tr').find('.buku-dipinjam-col').text()
                

                $('#input-update-nama-peminjam option').each(function() {
                    const optionText = $(this).text().trim()
                    if (optionText === namaPeminjam) {
                        $(this).prop('selected', true)
                    }
                })

                $('#input-update-judul-buku option').each(function() {
                    const optionText = $(this).text().trim()
                    if (optionText  === judulBuku) {
                        $(this).prop('selected', true)
                    }
                })
            })

            $('.konfirmasi-update-data-btn').click(function(event) {
                event.preventDefault()

                const idPeminjam = parseInt($('#input-update-nama-peminjam').val(), 10);
                const idBuku = parseInt($('#input-update-judul-buku').val(), 10);
                
                $.ajax({
                    url: 'controller/edit_peminjaman_data.php',
                    type: 'PUT',
                    data: JSON.stringify({
                        idPeminjaman: idDataTerpilih,
                        idPeminjam: idPeminjam,
                        idBuku: idBuku
                    }),
                    success: function(response) {
                        location.reload()
                        console.log('Sukses perbarui data')
                    },
                    error: function(xhr, status, error) {
                        alert('Gagal perbarui data!')
                        console.error('Error:', status, error);
                    }
                })
            })

            $('.delete-btn').click(function() {
                idDataTerpilih = parseInt($(this).closest('tr').find('.id-peminjaman-col').text(), 10)
            })

            $('.konfirmasi-delete-data-btn').click(function() {
                $.ajax({
                    url: 'controller/hapus_data.php',
                    type: 'DELETE',
                    data: JSON.stringify({ id: idDataTerpilih }),
                    success: function(response) {
                        location.reload()
                        console.log('Berhasil hapus data: ', response);
                    },
                    error: function(xhr, status, error) {
                        alert('Gagal menghapus data!')
                        console.error('Error:', status, error);
                    }
                })
            })
        })
    </script>
</body>

</html>

