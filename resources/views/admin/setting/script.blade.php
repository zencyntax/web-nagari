<script>

function previewImage(input, previewId)
{
    const file = input.files[0];

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function(e)
    {
        document
            .getElementById(previewId)
            .setAttribute('src', e.target.result);

        document
            .getElementById(previewId)
            .style.display = 'block';
    };

    reader.readAsDataURL(file);
}

</script>
