
			//******************************************************
//    Aqui validamos el correo

function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }
function valida_campo(nombre) {
		  if (/^[A-Za-z#\s]*$/.test(nombre)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }	
function valida_numero(numero) {
		  if (/^([0-9])*$/.test(numero)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }			 
		 

function letras_numeros(numero) {
		  if (/[0-9-A-Za-z#]*$/.test(numero)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }	
//******************************************************
//Limpiamos lo que tenga el formulario
function limpiar_logueo()
{   document.forma.reset();
    document.forma.user.focus();
	}
//******************************************************
//Valida el loqueo del usuario
	function validar_logueo()
{
	var form=document.forma;
	if(form.user.value==0)
	{
	alert("Esta vacio el usuario");
	form.user.value="";
	form.user.focus();
	return false;
	}
		if(form.pass.value==0)
	{
	alert("Esta vacio el pass");
	form.pass.value="";
	form.pass.focus();
	return false;
	}
	form.pass.value=calcMD5(form.pass.value);
	form.submit();
	}
	
	
//******************************************************
//Valida el formulario	
function valida_registro()
{
var accidente;
var form=document.form;

if (document.form.accidente[0].checked)

{ accidente="Caida";
}



if (document.form.accidente[1].checked)

{
accidente="solo";
}
if (document.form.accidente[2].checked)

{
accidente="camilla";
}

if ((!document.form.accidente[0].checked) && (!document.form.accidente[1].checked) && (!document.form.accidente[2].checked))

{
alert("El tipo de accidente  es obligatorio");
document.form.accidente[0].focus();
}
else
{

if(form.domocilio.value==0)
{
alert("El domocilio es obligatorio");
form.domocilio.value="";
form.domocilio.focus();
return false;
}

if(letras_numeros(form.domocilio.value)==false)
{
alert("El domocilio solo letras y numeros porfavor");
form.domocilio.value="";
form.domocilio.focus();
return false;
}
var sexo;

if (document.form.sexo[0].checked)

{ sexo="hombre";
}



if (document.form.sexo[1].checked)

{
sexo="mujer";
}
if ((!document.form.sexo[0].checked) && (!document.form.sexo[1].checked))

{
alert("El tipo de sexo  es obligatorio");
document.form.sexo[0].focus();
}
else
{
if(form.edad.value==0)
{
alert("La edad es obligatorio");
form.edad.value="";
form.edad.focus();
return false;
}
if(valida_numero(form.edad.value)==false)
{
alert("La edad solo numeros porfavor");
form.edad.value="";
form.edad.focus();
return false;
}
if(form.dia.value==0)
{
alert("Dia de nacimiento es necesario");
form.dia.value="";
form.dia.focus();
return false;
}
if(valida_numero(form.dia.value)==false)
{
alert("El dia solo numeros porfavor");
form.dia.value="";
form.dia.focus();
return false;
}
if(form.mes.value==0)
{
alert("Mes de nacimiento es necesario");
form.mes.value="";
form.mes.focus();
return false;
}
if(valida_numero(form.mes.value)==false)
{
alert("El mes solo numeros porfavor");
form.mes.value="";
form.mes.focus();
return false;
}
if(form.ano.value==0)
{
alert("Año de nacimiento es necesario");
form.ano.value="";
form.ano.focus();
return false;
}

if(valida_numero(form.ano.value)==false)
{
alert("El año solo numeros porfavor");
form.ano.value="";
form.ano.focus();
return false;
}
//
if(form.sangre.value==0)
{
alert("Tipo de sangre es obligatoria");
form.sangre.value="";
form.sangre.focus();
return false;
}
if(valida_campo(form.sangre.value)==false)
{
alert("Cmpo sangre solo  letras porfavor");
form.sangre.value="";
form.sangre.focus();
return false;
}
if(form.diagnostico.value==0)
{
alert("Ingrese el diagnostico es obligatoria");
form.diagnostico.value="";
form.diagnostico.focus();
return false;
}
if(valida_campo(form.diagnostico.value)==false)
{
alert("El diagnostico solo letras porfavor");
form.diagnostico.value="";
form.diagnostico.focus();
return false;
}

if(form.toma.value==0)
{
alert("Ingrese su medicamento que toma  en caso que no tome ingrese none");
form.toma.value="";
form.toma.focus();
return false;
}
if(valida_campo(form.toma.value)==false)
{
alert("Medicamento que toma solo letras porfavor");
form.toma.value="";
form.toma.focus();
return false;
}

if(form.horario.value==0)
{
alert("Ingrese su horario que toma medicamento en caso que no tome ingrese none");
form.horario.value="";
form.horario.focus();
return false;
}
if(letras_numeros(form.horario.value)==false)
{
alert("Horario que toma medicamento solo letras porfavor");
form.horario.value="";
form.horario.focus();
return false;
}
if(form.dosis.value==0)
{
alert("Ingrese su dosis que toma medicamento en caso que no tome ingrese none");
form.dosis.value="";
form.dosis.focus();
return false;
}
if(letras_numeros(form.dosis.value)==false)
{
alert("Dosis que toma medicamento solo letras porfavor");
form.dosis.value="";
form.dosis.focus();
return false;
}
if(form.nombre.value==0)
{
alert("El nombre de la persona con la que nos comunicaremos es necesario");
form.nombre.value="";
form.nombre.focus();
return false;
}
if(valida_campo(form.nombre.value)==false)
{
alert("Nombre solo letras porfavor");
form.nombre.value="";
form.nombre.focus();
return false;
}

if(form.parentesco.value==0)
{
alert("Su parentesco de la persona con la que nos comunicaremos es necesario");
form.parentesco.value="";
form.parentesco.focus();
return false;
}
if(valida_campo(form.parentesco.value)==false)
{
alert("Parentesco solo letras porfavor");
form.parentesco.value="";
form.parentesco.focus();
return false;
}
if(form.casa.value==0)
{
alert("El telefono de casa es necesario si no cuenta con el ingrese none");
form.casa.value="";
form.casa.focus();
return false;
}
if(letras_numeros(form.casa.value)==false)
{
alert("Tel de casa solo numeros y letras ");
form.casa.value="";
form.casa.focus();
return false;
}
if(form.trabajo.value==0)
{
alert("Si no cuenta con telefono de trabajo ingrese none");
form.trabajo.value="";
form.trabajo.focus();
return false;
}
if(letras_numeros(form.trabajo.value)==false)
{
alert("Tel de trabajo solo ingrese numeros y letras");
form.trabajo.value="";
form.trabajo.focus();
return false;
}
if(form.celular.value==0)
{
alert("Si no cuenta con celular ingrese none");
form.celular.value="";
form.celular.focus();
return false;
}
if(letras_numeros(form.celular.value)==false)
{
alert("Celular  solo ingrese numeros y letras");
form.celular.value="";
form.celular.focus();
return false;
}

if(form.traslado.value==0)
{
alert("Saber a donde lo vamos a trasladar es necesario");
form.traslado.value="";
form.traslado.focus();
return false;
}
if(letras_numeros(form.traslado.value)==false)
{
alert("El traslado   solo ingrese numeros y letras porfavor");
form.traslado.value="";
form.traslado.focus();
return false;
}

	form.submit();
}
}
}


