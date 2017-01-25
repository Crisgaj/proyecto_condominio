function validaRut(){
    var rut = document.getElementById('rut').value;

    var rut2 = rut.split("-");
    p1 = rut2[0];
    p2 = rut2[1];

    var c1 = p1.length;
    c1 = parseInt(c1)-1;
        //alert ("Contador "+c1);
        //alert ("Rut "+p1+" dv "+p2);

    //supongamos el caso para 8 digitos.
    var parte = p1.split("");

    var serie = 2;
    var suma = 0;
    for(var i=c1; i>=0;i--){
        suma = suma + (parte[i]*serie);
        //alert ("i"+i+" suma " +suma+ "parte "+parte[i] );
        serie++;
        if(serie == 8){
            serie = 2;
        }
    }

    //alert("suma es "+suma);

    var resto = suma%11;
    var dv = 11-resto;
    if(dv >= 1 && dv <= 9){
    //alert ("DV es "+dv);
    }else if(dv == 10){
        dv = "k";
    //alert ("DV es "+dv);
    }else{
        dv = 0;
    }

    if(dv == p2){
        alert("Rut valido");
    }else{
        alert("Rut invalido");
    }
    return false;
}
