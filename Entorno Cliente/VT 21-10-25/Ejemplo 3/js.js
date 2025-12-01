//Añadimos funcionalidad al primer boton
document.getElementsByTagName("button")[0].onclick = function() {
                                                        //Cogemos el valor del input
                                                        let entrada=document.getElementsByTagName("input")[0].value;
                                                        crearLista(entrada);
};

//Definimos la funcion que crea la lista
var objetivo=document.getElementById("resultado");

function crearLista(repeticiones) {
    console.log("Genero la lista");
    //Iniciamos el elemento lista
    objetivo.innerHTML="<ol>";
    //Creamos tantos elementos como repeticiones
    for(var i=0;i<repeticiones;i++) {
        let numero=parseInt(Math.random()*10);
        objetivo.innerHTML+="<li>"+String(numero)+"</li>";
    }
    //Cierro la lista
    objetivo.innerHTML +="</ol>";

    //Seleccionamos todos los elementos li creados.
    let elementosCreados=document.getElementsByTagName("li");

    function cambiaColorSiEsPar(elemento){
        if(parseInt(elemento.innerHTML) % 2==0) {
            console.log("cambia");
            elemento.classList.add("verde");
        }
    }

    //Recorro todos los elementos creados y les aplico la funcion
    for(var i=0;i<elementosCreados.length;i++) {
        cambiaColorSiEsPar(elementosCreados[i]);
    }

    //Una vez cambiada la clase, inicializamos el otro boton
    document.getElementById("colorear").onclick = function() {
        console.log("Ejecuta");
        //Saco en una lista todos los elementos con la clase "verde"    
        let listaVerdes=document.getElementsByClassName("verde");
        //Los recorro y les cambio el color
        for(var i=0;i<listaVerdes.length;i++) {
            listaVerdes[i].style.backgroundColor="green";
        }
    };

}