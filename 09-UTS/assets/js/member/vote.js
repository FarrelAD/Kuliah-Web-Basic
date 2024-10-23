let selectedCandidate = -1

function doVote(button) {
    selectedCandidate = $(button).data('id')
}

$(document).ready(() => {
    $(document).on('click', '.vote-button', function(event) {
        event.preventDefault();
        doVote(this);
    })

    

    $('#form-vote').submit(function(event) {
        event.preventDefault()

        if (selectedCandidate != -1) {
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: { selected_candidate: selectedCandidate },
                success: (res) => {
                    alert('Voting kamu telah terkirim!')
                },
                error: (xhr, status, error) => {
                    alert('Pengiriman formulir voting gagal!')
                }
            })
        } else {
            alert('Kamu harus memilih salah satu kandidat terlebih dahulu')
        }
    })
})