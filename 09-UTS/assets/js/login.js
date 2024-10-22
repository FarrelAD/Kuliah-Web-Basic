$(document).ready(() => {
    $('#form-login').submit(function(e) {
        e.preventDefault()

        const nimValue = $('#nim-input').val()
        const passwordValue = $('#password-input').val()

        if (!isUserInputEmpty(nimValue, passwordValue)) {
            const formData = $(this).serialize()

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: (res) => {
                    // window.location.href = '../pages/member/dashboard.php'
                },
                error: (xhr, status, error) => {
                    alert('Login gagal!')
                }
            })
        }
        
    })
})


// CATATAN: Cek lagi fungsi di bawah untuk melakukan validasi
// sepertinya bisa dilakukan validasi tanpa fungsi di bawah
function isUserInputEmpty(nimValue, passwordValue) {
    let isInputEmpty = true

    if (nimValue == '' && passwordValue == '') {
        alert('Input NIM dan password tidak boleh kosong!')
    } else if (nimValue == '') {
        alert('Input NIM tidak boleh kosong!')
    } else if (passwordValue == '') {
        alert('Input password tidak boleh kosong!')
    } else {
        isInputEmpty = false
    }

    return isInputEmpty
}

function isVarNumeric(value) {
    console.log('fungsi is var numeric terpanggil!')
    let result = true

    if (typeof value === 'number') {
        result = false
        alert('Input NIM harus berupa angka!')
    }

    return result
}