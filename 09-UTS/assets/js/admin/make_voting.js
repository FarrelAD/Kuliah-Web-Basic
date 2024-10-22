$(document).ready(() => {
    $('#generator-form-btn').on('click', function() {
        $('#form-container').empty()
    
        const totalForm = $('#candidate-total-input').val()
    
        for (let i = 0; i < totalForm; i++) {
            const newForm = $('<div></div>').addClass('userForm').attr('id', 'form' + i);
    
            const nameField = $('<input>')
                .attr({ type: 'text', name: 'name' + i })
                .prop('required', true);
            const classField = $('<input>')
                .attr({ type: 'text', name: 'studentClass' + i})
                .prop('required', true);
            const descriptionField = $('<textarea>')
                .attr({ name: 'description' + i });
            const imageField = $('<input>')
                .attr({ type: 'file', name: 'image' + i, accept: 'image/*' });

            const inputSubmit = $('<input>')
                .attr({ id: 'submit-all-data-btn', type: 'button', value: 'Kirim' })
    
            newForm.append(
                `<h4>Kandidat ${i + 1}</h4>`,
                'Nama kandidat', '<br>',
                nameField, '<br>',
                'Kelas kandidat', '<br>',
                classField, '<br>',
                'Visi misi kandidat', '<br>',
                descriptionField, '<br>',
                'Foto kandidat', '<br>',
                imageField, '<br>', 
                inputSubmit);
            
            $('#form-container').append(newForm)
        }
    })
})