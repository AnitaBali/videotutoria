//Crea una lista con todos los elementos td.
var listaDeValores=document.getElementsByTagName("td");

var resultado=0;    

for(var i=0;i<listaDeValores.length;i++){
    //Imprime todos los elementos td.
    console.log(listaDeValores[i]);

    //Convierte el contenido de cada td en entero y sumalos. Prueba a quitar el parseInt y verás lo que pasa.
    resultado=resultado+parseInt(listaDeValores[i].innerHTML);
}

//Imprime el resultado de la suma.
console.log("El resultado de la suma es: "+resultado + " y tiene " + String(resultado).length + " dígitos.");
