const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = { 
	password: /^.{5,10}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}

const campos = {
	password: false,
	correo: false,
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
