$(document).ready(function() {

    $("#btnComentarios").click(function(e) {
        e.preventDefault();

        insertarContacto();
    });


    async function insertarContacto() {
        const datos = new FormData(document.getElementById('formulario3'));

        await fetch('assets/data/registrarContacto.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
                    location.href = "principal.html"
                } else {
                    alert("Algo salio mal")
                    location.href = "principal.html"
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});