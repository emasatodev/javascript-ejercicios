var vector = [22,25,60,98,11,78,4,33,85,10]; //carga el vector

var mayor, posicionMayor; // carga las variables mayor, menor y posiciones
var menor, posocionMenor;

// Inicializo ocn un valor cualquiera del vector
// para asegurarme de que el resultado este
// dentro del conjunto de datos del "universo" del vector

mayor = vector[0]; //pone los datos de la primera posicion en mayor
posicionMayor = 0; //los datos de la posicion en mayor en 0

menor = vector[0]; //pone los datos de menor con la primera posicion
posicionMenor = 0; //inicializa menor en 0

for(let i = 0; i < 10; i++){
    if(mayor < vector[i]){
        mayor = vector[i];
        posicionMayor = i;
    }

    if(menor > vector[i]){
        menor = vector[i];
        posicionMenor = i;
    }
}

console.log("El mayor es " + mayor + " y se encuentra en la posicion " + posicionMayor);
console.log("El menor es " + menor + " y se encuentra en la posicion " + posicionMenor);