//inicializacion de variables
let tarjetasDestapadas = 0;
let tarjeta1= null;
let tarjeta2= null;
let primerResultado= null;
let segundoResultado= null;
let movimientos= 0;
let aciertos= 0;
let temporizador= false;
let timer=30;
let timerInicial=30;
let tiempoRegresivoId= null;

//Apuntando a documentos HTML
let mostrarMovimientos = document.getElementById('movimientos');
let mostarAciertos = document.getElementById('aciertos');
let mostrarTiempo = document.getElementById('t-restante');

//generar arreglo de numeros aleatorios
let numeros =[1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];
numeros = numeros.sort(()=>{return Math.random()-0.5});
console.log(numeros);

//Funciones
function contarTiempo(){
   tiempoRegresivoId = setInterval(()=>{
timer--;
mostrarTiempo.innerHTML = `Tiempo: ${timer} segundos`;
if(timer== 0){
clearInterval(tiempoRegresivoId);
bloquearTarjetas();
}
    },1000);
}

function bloquearTarjetas(){
    for(let i=0; i<=15; i++){
        let tarjetaBloqueada = document.getElementById(i);
        tarjetaBloqueada.innerHTML = numeros[i];
        tarjetaBloqueada.disabled = true;
    }
}

//funcion principal
function destapar(id){
    if(temporizador == false){
        contarTiempo();
        temporizador = true;
    }
tarjetasDestapadas++;
console.log(tarjetasDestapadas);

if(tarjetasDestapadas == 1){
    //mostrar el primer numero
tarjeta1 = document.getElementById(id);
primerResultado = numeros[id];
tarjeta1.innerHTML = numeros[id];

//Desabilitar el primer boton
tarjeta1.disabled= true;
}else if(tarjetasDestapadas ==2){
    //mostrar el sugundo numero
    tarjeta2 = document.getElementById(id);
    segundoResultado = numeros[id];
    tarjeta2.innerHTML= segundoResultado;

    //Desabilitar el sugundo boton
    tarjeta2.disabled = true;

    //incrementar movimientos
    movimientos++;
    mostrarMovimientos.innerHTML=`Movimientos: ${movimientos}`;
    if(primerResultado == segundoResultado){
        //Encerar contador de tarjetas destapas
      tarjetasDestapadas= 0
      //Aumnetar aciertos
      aciertos++;
      mostarAciertos.innerHTML =`Aciertos: ${aciertos}`;
      if(aciertos == 8){
        mostarAciertos.innerHTML=`Aciertos: ${aciertos} 😃`
        mostrarMovimientos.innerHTML=`Movimientos: ${movimientos}🌻`
        mostrarTiempo.innerHTML=`Fantastico solo demoraste ${timerInicial - timer} segundos`;
      }
}else{
    //Mostrar momentaneamente valores  y volver atapar
    setTimeout(()=>{
        tarjeta1.innerHTML= ' ';
        tarjeta2.innerHTML= ' ';
        tarjeta1.disabled = false;
        tarjeta2.disabled = false;
        tarjetasDestapadas = 0;
    },2000);
}
}

}