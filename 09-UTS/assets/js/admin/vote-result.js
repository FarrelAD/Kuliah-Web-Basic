$(document).ready(() => {
    $('#close-voting-btn').on('click', () => {
        $.ajax({
            type: 'GET',
            url: '../../../controllers/admin/close_voting.php',
            success: (res) => {
                alert('Data voting berhasil ditutup!')
                window.location.reload()
            },
            error: (res) => {
                alert('Data voting gagal dihapus! Terjadi kendala di server')
            }
        })
    })
})