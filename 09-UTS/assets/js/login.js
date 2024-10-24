$(document).ready(() => {
    $('#form-login').submit(function(e) {
        e.preventDefault()

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: (res) => {
                if (res.status == 'Success') {
                    window.location.href = res.redirectionPath
                } else {
                    alert('Login gagal!')
                }
            },
            error: (xhr, status, error) => {
                alert('Login gagal!')
            }
        })
        
    })
})
