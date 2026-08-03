<script>

$(function () {

    /*
    |--------------------------------------------------------------------------
    | Preview Upload Multiple
    |--------------------------------------------------------------------------
    */

    $('#galleryImages').on('change', function () {

        let preview = $('#galleryPreview');

        preview.html('');

        Array.from(this.files).forEach(function(file){

            let reader = new FileReader();

            reader.onload = function(e){

                preview.append(`
                    <div class="col-md-3 mb-3">
                        <img
                            src="${e.target.result}"
                            class="img-thumbnail"
                            style="height:150px;width:100%;object-fit:cover;">
                    </div>
                `);

            }

            reader.readAsDataURL(file);

        });

    });

    /*
    |--------------------------------------------------------------------------
    | Buka Modal Edit
    |--------------------------------------------------------------------------
    */

    $('.edit-gallery').click(function(){

        let id = $(this).data('id');

        let judul = $(this).data('judul');

        let urutan = $(this).data('urutan');

        let foto = $(this).data('foto');

        $('#editGalleryForm').attr(
            'action',
            $(this).data('update')
        );

        $('#editJudul').val(judul);

        $('#editUrutan').val(urutan);

        $('#editPreview').attr('src', foto);

        $('#newPreviewContainer').hide();

        $('#editFoto').val('');

        $('#editGalleryModal').modal('show');

    });

    /*
    |--------------------------------------------------------------------------
    | Preview Foto Baru
    |--------------------------------------------------------------------------
    */

    $('#editFoto').change(function(){

        let file = this.files[0];

        if(!file) return;

        let reader = new FileReader();

        reader.onload = function(e){

            $('#newPreviewContainer').show();

            $('#newPreview').attr(
                'src',
                e.target.result
            );

        }

        reader.readAsDataURL(file);

    });

    /*
    |--------------------------------------------------------------------------
    | Reset Modal Upload
    |--------------------------------------------------------------------------
    */

    $('#uploadGalleryModal').on('hidden.bs.modal', function(){

        $('#galleryImages').val('');

        $('#galleryPreview').html('');

    });

    /*
    |--------------------------------------------------------------------------
    | Reset Modal Edit
    |--------------------------------------------------------------------------
    */

    $('#editGalleryModal').on('hidden.bs.modal', function(){

        $('#editFoto').val('');

        $('#newPreviewContainer').hide();

    });

    /*
    |--------------------------------------------------------------------------
    | SweetAlert Delete
    |--------------------------------------------------------------------------
    */

    $('.delete-gallery').submit(function(e){

        e.preventDefault();

        let form = this;

        Swal.fire({

            title: 'Hapus foto?',

            text: 'Foto galeri akan dihapus.',

            type: 'warning',

            showCancelButton: true,

            confirmButtonText: 'Ya',

            cancelButtonText: 'Batal'

        }).then(function(result){

            if(result.value){

                form.submit();

            }

        });

    });

});
</script>
