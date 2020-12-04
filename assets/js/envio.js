$(document).ready(function() {

    $("#btnEnvio").click(function(e) {
        e.preventDefault();

        insertarDato2();
    });


    async function insertarDato2() {
        const datos = new FormData(document.getElementById('formulario4'));

        await fetch('assets/data/envio.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
                    alert("Los datos fueron registrados correctamente, redirigiendote a la pagina principal.")
                    location.href = "principal.html"
                } else {
                    alert("Algo Salio Mal, contactate con nosotros")
                    location.href = "principal.html"
                }
            })
            .catch(err => {
                console.log(err);
            });

    }

});