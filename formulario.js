//(funcion)(){
    var formulario = document.getElementById('formulario'),
		nombre = formulario.nombre,
		correo = formulario.correo,
		sexo = formulario.sexo,
		terminos = formulario.terminos,
		error = document.getElementById('error');
function validarNombre(e){
    if(nombre.value == '' || nombre == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarCorreo(e){
     if(correo.value == '' || correo == null){
        console.log('Completa el correo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Email</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarSexo(e){
    if(sexo.value == '' || sexo.value == null){
        console.log('Selecciona Un Sexo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Selecciona Un Sexo</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
}
}

function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validarCorreo(e);
   validarSexo(e);
}


formulario.addEventListener('submit', validarForm);

//}())