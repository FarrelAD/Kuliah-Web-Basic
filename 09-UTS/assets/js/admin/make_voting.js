$(document).ready(() => {
    $('#generator-form-btn').on('click', function() {
        $('#form-registration').empty()
    
        const totalForm = $('#candidate-total-input').val()
    
        for (let i = 0; i < totalForm; i++) {
            const newForm = $('<div class="sub-form"></div>').addClass('userForm').attr('id', 'sub-form' + i);
    
            const nameField = $('<input>')
                .attr({ type: 'text', name: 'name[]' })
                .prop('required', true);
            const classField = $('<input>')
                .attr({ type: 'text', name: 'student_class[]'})
                .prop('required', true);
            const descriptionField = $('<textarea>')
                .attr({ name: 'description[]' });
            const imageField = $('<input>')
                .attr({ type: 'file', name: 'image[]', accept: 'image/*' });
    
            newForm.append(
                `<h4>Kandidat ${i + 1}</h4>`,
                'Nama kandidat', '<br>',
                nameField, '<br>',
                'Kelas kandidat', '<br>',
                classField, '<br>',
                'Visi misi kandidat', '<br>',
                descriptionField, '<br>',
                'Foto kandidat', '<br>',
                imageField, '<br>');
            
            $('#form-registration').append(newForm)
        }

        const inputSubmit = $('<input>')
        .attr({ id: 'submit-all-data-btn', type: 'submit', value: 'Kirim' })

        $('#form-registration').append(inputSubmit)
    })
})