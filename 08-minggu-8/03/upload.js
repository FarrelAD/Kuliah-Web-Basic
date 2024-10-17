$(document).ready(() => {
    $('#upload-form').submit(function(e) {
        e.preventDefault()

        const formData = new FormData(this)

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (res) => $('#status').html(res),
            error: () => $('#status').html('Terjadi kesalahan saat mengunggah file.')
        })
    })
})