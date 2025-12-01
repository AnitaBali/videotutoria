//Crear array vacío
let miArray = [];

//Agregar elementos al array usando el método push
miArray.push(1);
miArray.push(2);
miArray.push(3);

//Mostrar el contenido del array
console.log("Contenido del array después de push:", miArray);

//Concatenar dos arrays usando el método concat
let otroArray = [4, 5, 6];
let arrayConcatenado = miArray.concat(otroArray);

//Mostrar el contenido del array concatenado
console.log("Contenido del array concatenado:", arrayConcatenado);

//Eliminar el último elemento del array inicial usando el método pop
let elementoEliminado = miArray.pop();

//Mostrar el elemento eliminado y el contenido del array después del pop
console.log("Elemento eliminado con pop:", elementoEliminado);
console.log("Contenido del array después de pop:", arrayConcatenado);