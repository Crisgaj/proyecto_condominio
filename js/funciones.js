function validaCampos(){

  //Validacion registro copropietarios

  var rut=document.getElementById('rut').value;
  var pass=document.getElementById('pass').value;
  var nombre=document.getElementById('nombre').value;
  var ape_pat=document.getElementById('ape_pat').value;
  var ape_mat=document.getElementById('ape_mat').value;
  var email=document.getElementById('email').value;
  var tel_fijo=document.getElementById('tel_fijo').value;
  var tel_cel=document.getElementById('tel_cel').value;
  var nro_depto=document.getElementById('nro_depto').value;

  //Validaciones registro propietarios
  if(rut=="" || rut.length==0){
    alert("Ingrese su rut de forma correcta");
    return false;
  }else if (pass=="" || pass.length==0){
    alert("Ingrese su contraseña");
    return false;
  }else if (nombre=="" || nombre.length==0){
    alert("Ingrese su nombre");
    return false;
  }else if (ape_pat=="" || ape_pat.length==0){
    alert("Ingrese su apellido paterno");
    return false;
  }else if (ape_mat=="" || ape_mat.length==0){
    alert("Ingrese su apellido materno");
    return false;
  }else if (email=="" || email.length==0){
    alert("Ingrese su email de forma correcta");
    return false;
  }else if (tel_fijo=="" || tel_fijo.length==0){
    alert ("Ingrese su telefono fijo");
    return false;
  }else if (tel_cel=="" || tel_cel.length==0){
    alert ("Ingrese su celular de forma correcta");
    return false;
  }else if (nro_depto=="" || nro_depto.length==0){
    alert("Ingrese su numero de departamento");
    return false;
  }

}

function validaLogin(){
  var rut=document.getElementById('rut').value;
  var pass=document.getElementById('pass').value;

  if (rut=="" || rut.length==0 ) {
      alert ("Ingrese su rut");
      return false;
  }

  if (pass=="" || pass.length==0) {
    alert ("Ingrese su contraseña");
    return false;
  }

}

function validaCobro(){
  var rut=document.getElementById('rut').value;

  if (rut=="" || rut.length==0 ) {
      alert ("Ingrese su rut");
      return false;
  }
}

function validaMonto(){
  var monto=document.getElementById('monto').value;

  if (monto=="" || monto.length==0 || isNaN(monto)) {
      alert ("Ingrese un monto");
      return false;
  }

  if(monto<10000){
    alert ("Monto debe ser superior a 10000");
    return false;
  }
}
