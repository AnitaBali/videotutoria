var botonInsertar=document.getElementById("insertar");
var contenidoCampoTexto=document.getElementsByTagName('input')[0];
var textoFijo=document.getElementsByClassName("insertado")[0];

botonInsertar.onclick=function(){
    textoFijo.innerHTML=contenidoCampoTexto.value;
};

sumar.onclick=function(){
    var tamano=textoFijo.style.fontSize;
    tamano=tamano.substring(0,tamano.length-1);
    tamano=parseInt(tamano)+5;
    tamano=tamano+"%";
    textoFijo.style.fontSize=tamano;
    console.log(tamano);
};

restar.onclick=function(){
    var tamano=textoFijo.style.fontSize;
    tamano=tamano.substring(0,tamano.length-1);
    tamano=parseInt(tamano)-5;
    tamano=tamano+"%";
    textoFijo.style.fontSize=tamano;
    console.log(tamano);
};

