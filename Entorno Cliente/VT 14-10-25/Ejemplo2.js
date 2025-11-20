var listaEnlaces=document.getElementsByTagName("a");

for(var i=0;i<listaEnlaces.length;i++){
    console.log(listaEnlaces[i].innerHTML);
    listaEnlaces[i].onclick=function(){
        document.getElementById("eleccion").innerHTML=this.innerHTML;
        console.log("Cambio");
    }
}