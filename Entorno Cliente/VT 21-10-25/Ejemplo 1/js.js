var tamano=document.getElementById("tamano").innerHTML;

for (var i=0;i<tamano;i++){
    document.getElementsByTagName("ul")[0].innerHTML += "<li>Creo el elemento "+i+"</li>";
    }


document.getElementsByTagName("ul")[0].style.backgroundColor="red";
document.getElementsByTagName("ul")[1].style.backgroundColor="green";
