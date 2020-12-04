$(document).ready(function() {

    $("#btnRegister").click(function(e) {
        e.preventDefault();

        insertarDato();
    });


    async function insertarDato() {
        const datos = new FormData(document.getElementById('formulario2'));

        await fetch('assets/data/register.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
                    location.href = "index.html"
                } else {
                    alert("Datos Incorrectos")
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});