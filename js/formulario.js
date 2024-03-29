const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	user: /^[a-zA-Z0-9\_\-]{4,16}$/,
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{5,10}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{10}$/, // 10 numeros.
	cedula: /^\d{10}$/, // 10 numeros.
	
}

const campos = {
	usuario: false,
	user: false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false,
    cedula:false,
    apellido:false
}

//Cuando se escriba mal va a validar con lasexpresiones regulares
const validarFormulario = (e) => {
	switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido');
		break;
		case "contraseña":
			validarCampo(expresiones.password, e.target, 'contraseña');
			validarPassword2();
		break;
		case "contraseñax2":
			validarPassword2();
		break;
		case "email":
			validarCampo(expresiones.correo, e.target, 'email');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
        case "cedula":
			validarCampo(expresiones.cedula, e.target, 'cedula');
		break;
        
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}
//Verificar que las contraseñas sean iguales
const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('contraseña');
	const inputPassword2 = document.getElementById('contraseñax2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__contraseñax2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__contraseñax2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__contraseñax2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__contraseñax2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__contraseñax2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__contraseñax2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__contraseñax2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__contraseñax2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__contraseñax2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__contraseñax2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

/*formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	//const terminos = document.getElementById('terminos');
	if(campos.apellido && campos.nombre && campos.contraseña && campos.email && campos.telefono && campos.cedula){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});*/