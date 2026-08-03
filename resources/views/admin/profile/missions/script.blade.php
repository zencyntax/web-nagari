<script>

function previewImage(input, previewId)
{
    if (input.files && input.files[0]) {

        let reader = new FileReader();

        reader.onload = function(e){

            $('#' + previewId)
                .attr('src', e.target.result)
                .show();

        };

        reader.readAsDataURL(input.files[0]);
    }
}

$('.btn-edit').click(function(){

    $('#editMissionForm').attr(
        'action',
        $(this).data('update')
    );

    $('#editIsi').val(
        $(this).data('isi')
    );

    $('#editUrutan').val(
        $(this).data('urutan')
    );

    $('#editMissionModal').modal('show');

});

$('.delete-form').submit(function(e){

    e.preventDefault();

    let form = this;

    Swal.fire({

        title:'Hapus Data?',

        text:'Data misi akan dihapus.',

        type:'warning',

        showCancelButton:true,

        confirmButtonText:'Ya, Hapus',

        cancelButtonText:'Batal'

    }).then(function(result){

        if(result.value){

            form.submit();

        }

    });

});

</script>
