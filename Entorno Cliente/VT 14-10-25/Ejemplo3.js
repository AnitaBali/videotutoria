//Mostramos la fecha actual
var fechaActual=new Date(Date.now()); //Creamos un objeto de tipo Date y lo inicializamos con la fecha actual

document.getElementById("fecha").innerHTML=fechaActual.getDate() + " de " +
fechaActual.toLocaleDateString("es-ES" , {month: "long"}) + " de " +
fechaActual.getFullYear(); //Mostramos la fecha actual en el elemento con id "fechaActual"

//Mostramos el segundo actual
var segundoActual=fechaActual.getSeconds(); //Obtenemos el segundo actual

document.getElementById("segundo").innerHTML=segundoActual; //Mostramos el segundo actual en el elemento 
// con id "segundo"

//Utilizamos Math para multiplicar el segundo actual por PI y redondear el valor
var resultado=Math.round(segundoActual * Math.PI); //Multiplicamos el segundo actual por PI y redondeamos el valor

document.getElementById("resultado").innerHTML=resultado; //Mostramos el resultado en el elemento con id 
// "resultado"

//Variable que cambiará el color de fondo
var color;

//La funcion cambia el valor de la variable dependiendo de su paridad y devuelve un texto
function parOImpar(valor){
    if(valor % 2 == 0){
        color="lightblue"; //Si es par, el color será azul claro
        return "par";
    } else {
        color="lightgreen"; //Si es impar, el color será verde claro
        return "impar";
    }
}

//Mostramos el texto de la paridad y cambiamos el color de fondo
document.getElementById("paridad").innerHTML=parOImpar(resultado); //Mostramos si el resultado es par o impar
document.getElementsByTagName("body")[0].style.backgroundColor=color; //Cambiamos el color de fondo