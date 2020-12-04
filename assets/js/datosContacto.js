$(document).ready(function() {

    $("#btnProducto").click(function(e) {
        e.preventDefault();

        insertarCompra();
    });


    async function insertarCompra() {
        const datos = new FormData(document.getElementById('formulario4'));

        await fetch('assets/data/datosContacto.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
<<<<<<< HEAD
                    location.href = "principal.html"
                } else {
                    alert("Algo salio mal")
                    location.href = "principal.html"
=======
                    alert("Compra concluida, redirigiendote al index")
                    location.href = "index.html"
                } else {
                    alert("Datos Incorrectos" < br > "intente mas tarde")
>>>>>>> b869f1101910b24d7d87f8f6ab0802d536347680
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});