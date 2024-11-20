let cartas = [];
let cartasJugador = [];
let cartasCrupier = [];
let indiceCarta = 0;
let palos = ["S", "H", "D", "C"];


function crearBaraja() {
    for (let i = 0; i < palos.length; i++) { // Generador de cartas
        for (let j = 1; j < 13; j++) {
            cartas.push(j,palos[i]);
        }
    }    
    
    console.log(_.shuffle(cartas)); //Barajeador


    

}



_.shuffle([1,2,3,4,5,6]); //Barajeador