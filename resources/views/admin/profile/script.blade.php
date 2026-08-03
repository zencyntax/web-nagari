<script>
document.addEventListener('DOMContentLoaded', function () {

    // ==========================
    // CKEditor
    // ==========================
    document.querySelectorAll('.editor').forEach((element) => {

        ClassicEditor.create(element, {
            toolbar: [
                'undo', 'redo',
                '|',
                'heading',
                '|',
                'bold', 'italic', 'underline',
                '|',
                'bulletedList', 'numberedList',
                '|',
                'outdent', 'indent',
                '|',
                'link', 'insertTable',
                '|',
                'blockQuote',
                '|',
                'imageUpload',
                '|',
                'mediaEmbed'
            ]
        })
        .catch(error => {
            console.error(error);
        });

    });

    // ==========================
    // Preview Foto Wali
    // ==========================
    const fotoInput = document.querySelector('input[name="foto_wali"]');

    if (fotoInput) {
        fotoInput.addEventListener('change', function () {
            previewImage(this, 'fotoPreview');
        });
    }

    // ==========================
    // Preview Peta
    // ==========================
    const petaInput = document.querySelector('input[name="peta"]');

    if (petaInput) {
        petaInput.addEventListener('change', function () {
            previewImage(this, 'petaPreview');
        });
    }

});

function previewImage(input, previewId)
{
    if (!input.files || !input.files[0]) {
        return;
    }

    const reader = new FileReader();

    reader.onload = function (e) {

        const preview = document.getElementById(previewId);

        if (preview) {

            preview.src = e.target.result;
            preview.style.display = 'block';

        }

    };

    reader.readAsDataURL(input.files[0]);
}
</script>
