document.getElementById('div-1').style.display="none";
document.getElementById('div-2').style.display="none";

function eligeCuenta(){

  if(document.getElementById('sel-1').value==1){
      document.getElementById('div-1').style.display="block";
      document.getElementById('div-2').style.display="none";
  }else{
      document.getElementById('div-1').style.display="none";
      document.getElementById('div-2').style.display="block";
  }

}
