$(document).ready(() => {
    $('#generator-form-btn').on('click', function() {
        $('#form-container').empty()
    
        const totalForm = $('#candidate-total-input').val()
    
        if (totalForm > 0) {
            $('#submit-all-data-btn').show()
        } else {
            $('#submit-all-data-btn').hide()
        }
    
        for (let i = 0; i < totalForm; i++) {
            const newForm = $('<div></div>').addClass('userForm').attr('id', 'form' + i);
    
            const nameField = $('<input>')
                .attr({ type: 'text', name: 'name' + i, placeholder: 'Masukkan nama' })
                .prop('required', true);
            const classField = $('<input>')
                .attr({ type: 'text', name: 'studentClass' + i, placeholder: 'Masukkan kelas kandidat' })
                .prop('required', true);
            const descriptionField = $('<textarea>')
                .attr({ name: 'description' + i, placeholder: 'Masukkan deskripsi kandidat' });
            const imageField = $('<input>')
                .attr({ type: 'file', name: 'image' + i, accept: 'image/*' });
    
            newForm.append(`<h4>Kandidat ${i + 1}</h4>`, nameField, '<br>', classField, '<br>', descriptionField, '<br>', imageField, '<br>');
            
            $('#form-container').append(newForm)
        }
    })
})