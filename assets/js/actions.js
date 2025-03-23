const viewImagen = document.getElementById('viewImagen');
const selectImagen = document.getElementById('selectImagen');

selectImagen.addEventListener('change', e => {
    if(e.target.files[0]){
        const reader = new FileReader();

        reader.onload = function (e){
            viewImagen.src = e.target.result;
        }

        reader.readAsDataURL(e.target.files[0]);
    } else {
        viewImagen.src = 'assets/img/camera.webp';
    }
});