var brian={
    nombre: "Brian",
    nPatas:4,
    raza:"Beagle",
    ladrar:function(){
        console.log("Hola Stewie");
    }
}

var ayudante=new Object();
ayudante.nombre="Ayudante de Santa";
ayudante.nPatas=4;
ayudante.raza="San Bernardo";
ayudante.ladrar=function(){
    console.log("Guau Guau");
}

function Perro(nombre, nPatas, raza,ladrido){
    this.nombre=nombre;
    this.nPatas=nPatas;
    this.raza=raza;
    this.ladrar=function(){
        console.log(ladrido);
    }
}

var perruedines= new Perro("Perruedines",4,"Chihuahua",".");

console.log(brian.nombre);
brian.ladrar();
console.log(ayudante.nombre);
ayudante.ladrar();
console.log(perruedines.nombre);
perruedines.ladrar();   