x = 0;
//INICIO DE LA WEB
function cargar(){
    document.getElementById('I').style.transform="translateX(0vw)";
    document.getElementById('I').style.transitionDuration="1s";

    setTimeout(() => {
        document.getElementById('VI').style.transform="translateX(0vw)";
        document.getElementById('VI').style.transitionDuration="1s";
    }, 250);

    setTimeout(() => {
        document.getElementById('IV').style.transform="translateX(0vw)";
        document.getElementById('IV').style.transitionDuration="1s";
    }, 500);

    setTimeout(() => {
        document.getElementById('III').style.transform="translateX(0vw)";
        document.getElementById('III').style.transitionDuration="1s";
    }, 750);

    setTimeout(() => {
        document.getElementById('V').style.transform="translateY(0vw)";
        document.getElementById('V').style.transitionDuration="1s";
    }, 1000);
    
    setTimeout(() => {
        document.getElementById('II').style.transform="translateY(0vw)";
        document.getElementById('II').style.transitionDuration="1s";
    }, 1500);
}
//ENTRAR A LA ERA DEL AMANECER
function info1(){
    if(x == 0){
        document.getElementById('I').style.width="100vw";
        document.getElementById('I').style.height="100vh";
        document.getElementById('I').style.position="absolute";
        document.getElementById('I').style.zIndex="1";
        document.getElementById('II').style.marginLeft="calc((100vw / 3) * 2)";
        document.getElementById('II').style.transitionDuration="0s";
        document.getElementById('Id').style.marginTop="70vh";
        document.getElementById('Id').style.width="5vw";
        setTimeout(() => {
            document.getElementById('Id').style.marginLeft="90vw";
        }, 200);
        document.getElementById('Id').style.transitionDuration="1.2s";
        setTimeout(()=>{    
            document.getElementById('Ih2').style.transitionDuration="1.2s";
            document.getElementById('Ih2').style.left="30vw";
            document.getElementById('Ih3').style.transitionDuration="1.2s";
            document.getElementById('Ih3').style.right="24.5vw";
        },500);
        x=1;
    }else if(x == 1){
        //ERA DEL AMANECER: DIOSES PRIMORDIALES (PARTE 1)
        setTimeout(()=>{
            document.getElementById('I').style.zIndex="0";
            document.getElementById('I').style.position="relative";
            document.getElementById('II').style.marginLeft="0";
        }, 2000);
        setTimeout(() => {
            document.getElementById('I').style.width="calc(100vw / 3)";
            document.getElementById('I').style.height="calc(100vh / 2)";
            document.getElementById('Id').style.marginTop="calc(((100vh / 2) / 2) - (20vh / 2))";
            document.getElementById('Id').style.marginLeft="calc(((100vw / 3) / 2) - (10vw / 2))";
            document.getElementById('Id').style.width="10vw";
            document.getElementById('Id').style.transitionDuration="1s";
        }, 1000);
        document.getElementById('Ih2').style.transitionDuration="1s";
        document.getElementById('Ih2').style.left="-50vw";
        document.getElementById('Ih3').style.transitionDuration="1s";
        document.getElementById('Ih3').style.right="-55vw";
        x=0;
    //PARTE 1 IMG ANU RETIRO
    }else if(x == 2){
        document.getElementById('Ih2-2').style.left="-50vw";
        document.getElementById('Anu').style.top="150vh";
        setTimeout(()=>{
            document.getElementById('Ih2').style.left="30vw";
            document.getElementById('Ih3').style.right="24.5vw";
        }, 500);
        document.getElementById('Ih3').style.right="-55vw";
        x=1;
    }
    //PARTE 1 IMG PADOMAY RETIRO
    else if(x == 3){
        document.getElementById('Ih2-3').style.left="-50vw";
        document.getElementById('Padomay').style.top="150vh";
        setTimeout(()=>{
            document.getElementById('Ih2').style.left="30vw";
            document.getElementById('Ih3').style.right="24.5vw";
        }, 500);
        document.getElementById('Ih3').style.right="-55vw";
        x=1;
    }
    //PARTE 2
    else if(x == 4){
        document.getElementById('I2-1').style.right="-55vw";
        setTimeout(()=>{
            document.getElementById('Ih2').style.left="30vw";
            document.getElementById('Ih3').style.right="24.5vw";
        }, 500);
        document.getElementById('Ih3').style.right="-55vw";
        document.getElementById('I2-1h2').style.left="-50vw";
        x=1;
    }
    //PARTE 2 IMG AURBIS RETIRO
    else if(x == 5){
        document.getElementById('Ih2-4').style.left="-50vw";
        document.getElementById('Aurbis').style.top="150vh";
        setTimeout(()=>{
            document.getElementById('I2-1h2').style.left="28vw";
            document.getElementById('I2-1h2').style.transitionDuration="1s";
            document.getElementById('I2-1').style.right="25vw";
            
            }, 500);
        document.getElementById('Ih3').style.right="-55vw";
        document.getElementById('I2-1h2').style.left="-50vw";
        x=1;
    }
    //PARTE 2 IMG ET'ADA RETIRO
    else if(x == 6){
        document.getElementById('Ih2-5').style.left="-50vw";
        document.getElementById('Etadaimg').style.top="150vh";
        setTimeout(()=>{
            document.getElementById('I2-1h2').style.left="28vw";
            document.getElementById('I2-1h2').style.transitionDuration="1s";
            document.getElementById('I2-1').style.right="25vw";
            
            }, 500);
        document.getElementById('Ih3').style.right="-55vw";
        document.getElementById('I2-1h2').style.left="-50vw";
        x=1;
    }
    //PARTE 3 VOLVER A PARTE 2
    else if(x == 7){
        document.getElementById('I3-1').style.left="100vw";
        document.getElementById('I3-1h2').style.left="100vw";
        document.getElementById('Mundus').style.left="-40vw";
        setTimeout(()=>{
            document.getElementById('I2-1h2').style.left="28vw";
            document.getElementById('I2-1h2').style.transitionDuration="1s";
            document.getElementById('I2-1').style.right="25vw";
            document.getElementById('Siguiente').style.left="65vw";
            x=4;
        }, 500);

    }
    //PARTE 3 ANUICOS IMG VOLVER
    else if(x == 8){
        document.getElementById('Ih3-1').style.left="-35vw";
        document.getElementById('Anuicosimg').style.top="150vh";

        setTimeout(()=>{
            document.getElementById('I3-1').style.transitionDuration="1s";
            document.getElementById('I3-1').style.left="-78vw";
            document.getElementById('I3-1h2').style.left="28vw";
            document.getElementById('I3-1h2').style.transitionDuration="1s";
            document.getElementById('Mundus').style.left="40vw";
            document.getElementById('Mundus').style.top="35vw";
            document.getElementById('Mundus').style.transitionDuration="1s";
            x=4;
            }, 500);
    }
    //MUNDUS MENU VOLVER
    else if(x == 9){
        document.getElementById('M1').style.left="-40vw";
        document.getElementById('M1-h3').style.left="75vw";
        document.getElementById('M2').style.left="-40vw";
        document.getElementById('M3').style.left="-40vw";
        document.getElementById('M4').style.left="-40vw";
        setTimeout(()=>{
            document.getElementById('Mundus').style.left="40vw";
            document.getElementById('I3-1').style.transitionDuration="1s";
            document.getElementById('I3-1').style.left="-78vw";
            document.getElementById('I3-1h2').style.left="28vw";
            document.getElementById('I3-1h2').style.transitionDuration="1s";
      }, 500);
      x=7;
    }
    //Kinaleth img sacar
    else if(x == 10){
        document.getElementById('Kinalethimg').style.top="-80vh";
        setTimeout(()=>{
        document.getElementById('M1').style.top="8vh";
        document.getElementById('M1-h3').style.left="-75vw";
        document.getElementById('M1-h3').style.top="22vh";
    }, 500);
        x=9;
    }
    //Magnus img sacar
    else if(x == 11){
        document.getElementById('Magnusimg').style.top="-80vh";
        setTimeout(()=>{
        document.getElementById('M1').style.top="8vh";
        document.getElementById('M1-h3').style.left="-75vw";
        document.getElementById('M1-h3').style.top="22vh";
    }, 500);
        x=9;
    }
    //Sacar mundus descripcion e img
    else if(x == 12){
        document.getElementById('Mundusimg').style.top="-100vh";
        document.getElementById('M2').style.left="-40vw";
        document.getElementById('M2-h3').style.left="75vw";
        setTimeout(()=>{
            document.getElementById('Mundus').style.left="40vw";
            document.getElementById('I3-1').style.transitionDuration="1s";
            document.getElementById('I3-1').style.left="-78vw";
            document.getElementById('I3-1h2').style.left="28vw";
            document.getElementById('I3-1h2').style.transitionDuration="1s";
    }, 500);
        x=7;
    }
    else if(x == 13){
        document.getElementById('M3').style.left="-40vw";
        document.getElementById('M3-h3').style.left="75vw";
        setTimeout(()=>{
            document.getElementById('Mundus').style.left="40vw";
            document.getElementById('I3-1').style.transitionDuration="1s";
            document.getElementById('I3-1').style.left="-78vw";
            document.getElementById('I3-1h2').style.left="28vw";
            document.getElementById('I3-1h2').style.transitionDuration="1s";
        }, 500);
        x=7;
    }
    else if(x == 14){
        document.getElementById('Lorkan').style.left="-40vw";
        document.getElementById('M4').style.left="-40vw";
        document.getElementById('M4-h3').style.left="75vw";
        setTimeout(()=>{
            document.getElementById('Mundus').style.left="40vw";
            document.getElementById('I3-1').style.transitionDuration="1s";
            document.getElementById('I3-1').style.left="-78vw";
            document.getElementById('I3-1h2').style.left="28vw";
            document.getElementById('I3-1h2').style.transitionDuration="1s";
        }, 500);
        x=7;
    }
    else if(x == 15){
        document.getElementById('L1').style.left="-40vw";
        document.getElementById('L2').style.left="-40vw";
        document.getElementById('L3').style.left="-40vw";
        document.getElementById('L4').style.left="-40vw";
        document.getElementById('Lorkan').style.left="-40vw";
        setTimeout(()=>{
            document.getElementById('Mundus').style.left="40vw";
            document.getElementById('M1').style.left="40vw";
            document.getElementById('M2').style.left="40vw";
            document.getElementById('M2').style.top="12vw";
            document.getElementById('M3').style.left="40vw";
            document.getElementById('M3').style.top="20vw";
            document.getElementById('M4').style.left="40vw";
            document.getElementById('M4').style.top="28vw";
        }, 500);
        x=9;
    }
    else if(x == 16){
        document.getElementById('L4-h3').style.left="75vw";
        document.getElementById('L1').style.left="-40vw";
        document.getElementById('L1-h3').style.left="100vw";

        setTimeout(()=>{
            document.getElementById('Lorkan').style.left="40vw";
            document.getElementById('L1').style.left="40vw";
            document.getElementById('L2').style.left="40vw";
            document.getElementById('L2').style.top="12vw";
            document.getElementById('L3').style.left="40vw";
            document.getElementById('L3').style.top="20vw";
            document.getElementById('L4').style.left="40vw";
            document.getElementById('L4').style.top="28vw";
            x=15;
        }, 500);
    }
    else if(x == 17){
        document.getElementById('L1-h3').style.left="-75vw";
        document.getElementById('Histimg').style.top="-100vh";
        setTimeout(() => {
            document.getElementById('L1').style.top="8vh";
            document.getElementById('L1-h3').style.left="-75vw";
            document.getElementById('L1-h3').style.top="22vh";
            x=16;
        }, 500);
    }
    else if(x == 18){
        document.getElementById('L1-h3').style.left="-75vw";
        document.getElementById('Aldmerimg').style.top="-100vh";
        setTimeout(() => {
            document.getElementById('L1').style.top="8vh";
            document.getElementById('L1-h3').style.left="-75vw";
            document.getElementById('L1-h3').style.top="22vh";
            x=16;
        }, 500);
    }
    else if(x == 19){
        document.getElementById('L1-h3').style.left="-75vw";
        document.getElementById('Variacionesimg').style.top="-100vh";
        setTimeout(() => {
            document.getElementById('L1').style.top="8vh";
            document.getElementById('L1-h3').style.left="-75vw";
            document.getElementById('L1-h3').style.top="22vh";
            x=16;
        }, 500);
    }
    else if(x == 20){
        document.getElementById('L1-h3').style.left="-75vw";
        document.getElementById('Hombrebestiaimg').style.top="-100vh";
        setTimeout(() => {
            document.getElementById('L1').style.top="8vh";
            document.getElementById('L1-h3').style.left="-75vw";
            document.getElementById('L1-h3').style.top="22vh";
            x=16;
        }, 500);
    }
    else if(x == 21){
        document.getElementById('L2').style.left="-40vw";
        document.getElementById('L2-h3').style.left="75vw";
        setTimeout(() => {
            document.getElementById('Lorkan').style.left="40vw";
            document.getElementById('L1').style.left="40vw";
            document.getElementById('L2').style.left="40vw";
            document.getElementById('L2').style.top="12vw";
            document.getElementById('L3').style.left="40vw";
            document.getElementById('L3').style.top="20vw";
            document.getElementById('L4').style.left="40vw";
            document.getElementById('L4').style.top="28vw";
        }, 500);
        x=15;
    }
    else if(x == 22){
        document.getElementById('L3').style.left="-40vw";
        document.getElementById('L3-h3').style.left="75vw";
        setTimeout(() => {
            document.getElementById('Lorkan').style.left="40vw";
            document.getElementById('L1').style.left="40vw";
            document.getElementById('L2').style.left="40vw";
            document.getElementById('L2').style.top="12vw";
            document.getElementById('L3').style.left="40vw";
            document.getElementById('L3').style.top="20vw";
            document.getElementById('L4').style.left="40vw";
            document.getElementById('L4').style.top="28vw";
        }, 500);
        x=15;
    }
    else if(x == 23){
        document.getElementById('Nirn').style.left="-40vw";
        document.getElementById('L4').style.left="-40vw";
        document.getElementById('L4-h3').style.left="75vw";
        setTimeout(() => {
            document.getElementById('Lorkan').style.left="40vw";
            document.getElementById('L1').style.left="40vw";
            document.getElementById('L2').style.left="40vw";
            document.getElementById('L2').style.top="12vw";
            document.getElementById('L3').style.left="40vw";
            document.getElementById('L3').style.top="20vw";
            document.getElementById('L4').style.left="40vw";
            document.getElementById('L4').style.top="28vw";
        }, 500);
        x=15;
    }
    else if(x == 24){
        document.getElementById('Nirn').style.left="40vw";
        document.getElementById('L4-h3').style.left="75vw";
        document.getElementById('Direniimg').style.top="-100vh";
        setTimeout(() => {
            document.getElementById('L4').style.top="8vh";
            document.getElementById('L4-h3').style.left="-75vw";
            document.getElementById('L4-h3').style.top="22vh";
            x=16;
        }, 500);
    }
    else if(x == 25){
        document.getElementById('Nirn').style.left="40vw";
        document.getElementById('L3-h3').style.left="75vw";
        document.getElementById('Rojaimg').style.top="-100vh";
        setTimeout(() => {
            document.getElementById('L4').style.top="8vh";
            document.getElementById('L4-h3').style.left="-75vw";
            document.getElementById('L4-h3').style.top="22vh";
            x=16;
        }, 500);
    }
    else if(x == 26){
        document.getElementById('Nirn-h3').style.left="75vw";
        document.getElementById('Nirnimg').style.top="-100vh";
        x=1;
    }
}
//ANU IMG (PARTE 1)
function Anu(){
    
    document.getElementById('Ih2').style.left="-50vw";
    document.getElementById('Ih3').style.right="-55vw";
    setTimeout(()=>{
        document.getElementById('Ih2-2').style.left="45vw";
        document.getElementById('Ih2-2').style.transitionDuration="1s";
        document.getElementById('Anu').style.top="25vh";
        document.getElementById('Anu').style.transitionDuration="1s";
    }, 500);
    x=2;
}
//PADOMAY IMG (PARTE 1)
function Padomay(){
    document.getElementById('Ih2').style.left="-50vw";
    document.getElementById('Ih3').style.right="-55vw";
    setTimeout(()=>{
        document.getElementById('Ih2-3').style.left="42.5vw";
        document.getElementById('Ih2-3').style.transitionDuration="1s";
        document.getElementById('Padomay').style.top="25vh";
        document.getElementById('Padomay').style.transitionDuration="1s";
    }, 500);
    x=3;
}
//FUNCION PARA PASAR LAS PARTES
function ISig(){
    //ERA DEL AMANECER PARTE 2
    if ( x == 1){
    document.getElementById('Ih2').style.transitionDuration="1s";
    document.getElementById('Ih2').style.left="-50vw";
    document.getElementById('Ih3').style.transitionDuration="1s";
    document.getElementById('Ih3').style.right="-55vw";
    document.getElementById('Siguiente').style.left="65vw";
    setTimeout(()=>{
        document.getElementById('I2-1h2').style.left="28vw";
        document.getElementById('I2-1h2').style.transitionDuration="1s";
        document.getElementById('I2-1').style.right="25vw";
    
    }, 500);
    x=4;
    //ERA DEL AMANECER PARTE 3
}else if( x == 4){
    document.getElementById('I2-1h2').style.left="-50vw";
    document.getElementById('I2-1').style.right="-55vw";

    setTimeout(()=>{
        document.getElementById('Siguiente').style.left="-25vw";
        document.getElementById('I3-1').style.transitionDuration="1s";
        document.getElementById('I3-1').style.left="-78vw";
        document.getElementById('I3-1h2').style.left="28vw";
        document.getElementById('I3-1h2').style.transitionDuration="1s";
        document.getElementById('Mundus').style.left="40vw";
        document.getElementById('Mundus').style.top="35vw";
        document.getElementById('Mundus').style.transitionDuration="1s";
    }, 500);
    x=7;
    }   
}


//AURBIS IMG (PARTE 2)
function Aurbisdesc(){
    document.getElementById('I2-1h2').style.left="-50vw";
    document.getElementById('I2-1').style.right="-55vw";
    setTimeout(()=>{
        document.getElementById('Ih2-4').style.left="42.5vw";
        document.getElementById('Ih2-4').style.transitionDuration="1s";
        document.getElementById('Aurbis').style.top="25vh";
        document.getElementById('Aurbis').style.transitionDuration="1s";
    }, 500);
    x=5;
}
//ET'ADA IMG (PARTE 2)
function Etadadesc(){
    document.getElementById('I2-1h2').style.left="-50vw";
    document.getElementById('I2-1').style.right="-55vw";
    setTimeout(()=>{

        document.getElementById('Ih2-5').style.left="42.5vw";
        document.getElementById('Ih2-5').style.transitionDuration="1s";
        document.getElementById('Etadaimg').style.top="25vh";
        document.getElementById('Etadaimg').style.transitionDuration="1s";
    }, 500);
    x=6;
}
//ANUICOS IMG (PARTE 3)
function Anuicosdesc(){
    document.getElementById('I3-1').style.left="100vw";
    document.getElementById('I3-1h2').style.left="100vw";
    document.getElementById('Mundus').style.left="-40vw";
    setTimeout(()=>{
        document.getElementById('Ih3-1').style.left="35vw";
        document.getElementById('Ih3-1').style.transitionDuration="1s";
        document.getElementById('Anuicosimg').style.top="22.5vh";
        document.getElementById('Anuicosimg').style.left="30vh";
        document.getElementById('Anuicosimg').style.transitionDuration="1s";
    }, 500);
    x=8;
}


//MUNDUS MENU
function Mundus(){
    
    setTimeout(()=>{
        
        document.getElementById('I3-1').style.left="55vw";
        document.getElementById('I3-1h2').style.left="100vw";
        document.getElementById('M1').style.left="40vw";
        document.getElementById('M2').style.left="40vw";
        document.getElementById('M2').style.top="12vw";
        document.getElementById('M3').style.left="40vw";
        document.getElementById('M3').style.top="20vw";
        document.getElementById('M4').style.left="40vw";
        document.getElementById('M4').style.top="28vw";
        }, 500);
        x=9;
}


function MundusI(){
    document.getElementById('Mundus').style.left="-40vw";
    document.getElementById('M2').style.left="-40vw";
    document.getElementById('M3').style.left="-40vw";
    document.getElementById('M4').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('M1-h3').style.left="-75vw";
        document.getElementById('M1-h3').style.top="22vh";
    }, 500);
}

function Kinalethdesc(){
    document.getElementById('M1').style.top="-25vh";
    document.getElementById('M1-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Kinalethimg').style.top="10vh";
        document.getElementById('Kinalethimg').style.left="27.5vw";
        document.getElementById('Kinalethimg').style.transitionDuration="1s";
    }, 500);
    x=10;
}

function Magnusdesc(){
    document.getElementById('M1').style.top="-25vh";
    document.getElementById('M1-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Magnusimg').style.top="10vh";
        document.getElementById('Magnusimg').style.left="27.5vw";
        document.getElementById('Magnusimg').style.transitionDuration="1s";
    }, 500);
    x=11;
}

function MundusII(){
    document.getElementById('Mundus').style.left="-40vw";
    document.getElementById('M1').style.left="-40vw";
    document.getElementById('M3').style.left="-40vw";
    document.getElementById('M4').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('M2').style.top="2.5vh";
        document.getElementById('M2-h3').style.left="-75vw";
        document.getElementById('M2-h3').style.top="22vh";
        document.getElementById('Mundusimg').style.top="50vh";
        document.getElementById('Mundusimg').style.left="27.5vw";
        document.getElementById('Mundusimg').style.transitionDuration="1s";
    }, 500);
    x=12;
}

function MundusIII(){
    document.getElementById('Mundus').style.left="-40vw";
    document.getElementById('M1').style.left="-40vw";
    document.getElementById('M2').style.left="-40vw";
    document.getElementById('M4').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('M3').style.top="2.5vh";
        document.getElementById('M3-h3').style.left="-75vw";
        document.getElementById('M3-h3').style.top="22vh";
    }, 500);
    x=13;
}
function MundusIV(){
    document.getElementById('Mundus').style.left="-40vw";
    document.getElementById('M1').style.left="-40vw";
    document.getElementById('M2').style.left="-40vw";
    document.getElementById('M3').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('M4').style.top="2.5vh";
        document.getElementById('M4-h3').style.left="-75vw";
        document.getElementById('M4-h3').style.top="22vh";
        document.getElementById('Lorkan').style.left="40vw";
        document.getElementById('Lorkan').style.top="35vw";
        document.getElementById('Lorkan').style.transitionDuration="1s";
    }, 500);
    x=14;
}


function LorkanMenu(){
    document.getElementById('M4').style.left="-40vw";
    document.getElementById('M4-h3').style.left="75vw";
    setTimeout(()=>{

        document.getElementById('L1').style.left="40vw";
        document.getElementById('L2').style.left="40vw";
        document.getElementById('L2').style.top="12vw";
        document.getElementById('L3').style.left="40vw";
        document.getElementById('L3').style.top="20vw";
        document.getElementById('L4').style.left="40vw";
        document.getElementById('L4').style.top="28vw";
        }, 500);
        x=15;
}

function Lorkan1(){
    document.getElementById('Lorkan').style.left="-40vw";
    document.getElementById('L2').style.left="-40vw";
    document.getElementById('L3').style.left="-40vw";
    document.getElementById('L4').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('L1-h3').style.left="-75vw";
        document.getElementById('L1-h3').style.top="22vh";
    }, 500);
    x=16;
}
function Lorkan2(){
    document.getElementById('Lorkan').style.left="-40vw";
    document.getElementById('L1').style.left="-40vw";
    document.getElementById('L3').style.left="-40vw";
    document.getElementById('L4').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('L2').style.top="2.5vh";
        document.getElementById('L2-h3').style.left="-75vw";
        document.getElementById('L2-h3').style.top="22vh";
    }, 500);
    x=21;
}
function Lorkan3(){
    document.getElementById('Lorkan').style.left="-40vw";
    document.getElementById('L1').style.left="-40vw";
    document.getElementById('L2').style.left="-40vw";
    document.getElementById('L4').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('L3').style.top="2.5vh";
        document.getElementById('L3-h3').style.left="-75vw";
        document.getElementById('L3-h3').style.top="22vh";
    }, 500);
    x=22;
}
function Lorkan4(){
    document.getElementById('Lorkan').style.left="-40vw";
    document.getElementById('L1').style.left="-40vw";
    document.getElementById('L2').style.left="-40vw";
    document.getElementById('L3').style.left="-40vw";
    setTimeout(() => {
        document.getElementById('L4').style.top="2.5vh";
        document.getElementById('L4').style.left="50vh";
        document.getElementById('L4-h3').style.left="-75vw";
        document.getElementById('L4-h3').style.top="22vh";
        document.getElementById('Nirn').style.left="40vw";
        document.getElementById('Nirn').style.top="60vh";
    }, 500);
    x=23;
}

function Histimg(){
    document.getElementById('L1').style.top="-25vh";
    document.getElementById('L1-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Histimg').style.top="10vh";
        document.getElementById('Histimg').style.left="27.5vw";
        document.getElementById('Histimg').style.transitionDuration="1s";
    }, 500);
    x=17;
}
function Aldmerimg(){
    document.getElementById('L1').style.top="-25vh";
    document.getElementById('L1-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Aldmerimg').style.top="10vh";
        document.getElementById('Aldmerimg').style.left="27.5vw";
        document.getElementById('Aldmerimg').style.transitionDuration="1s";
    }, 500);
    x=18;
}
function Variacionesimg(){
    document.getElementById('L1').style.top="-25vh";
    document.getElementById('L1-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Variacionesimg').style.top="10vh";
        document.getElementById('Variacionesimg').style.left="27.5vw";
        document.getElementById('Variacionesimg').style.transitionDuration="1s";
    }, 500);
    x=19;
}
function Hombrebestiaimg(){
    document.getElementById('L1').style.top="-25vh";
    document.getElementById('L1-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Hombrebestiaimg').style.top="5vh";
        document.getElementById('Hombrebestiaimg').style.left="35vw";
        document.getElementById('Hombrebestiaimg').style.transitionDuration="1s";
    }, 500);
    x=20;
}

function Direniimg(){
    document.getElementById('Nirn').style.left="-40vw";
    document.getElementById('L4').style.top="-25vh";
    document.getElementById('L4-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Direniimg').style.top="5vh";
        document.getElementById('Direniimg').style.left="35vw";
        document.getElementById('Direniimg').style.transitionDuration="1s";
    }, 500);
    x=24;
}

function Rojaimg(){
    document.getElementById('Nirn').style.left="-40vw";
    document.getElementById('L4').style.top="-25vh";
    document.getElementById('L4-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Rojaimg').style.top="5vh";
        document.getElementById('Rojaimg').style.left="35vw";
        document.getElementById('Rojaimg').style.transitionDuration="1s";
    }, 500);
    x=25;
}

function Nirn(){
    document.getElementById('Nirn').style.left="-40vw";
    document.getElementById('L4').style.left="-40vw";
    document.getElementById('L4-h3').style.left="75vw";
    setTimeout(() => {
        document.getElementById('Nirnimg').style.top="40vh";
        document.getElementById('Nirnimg').style.left="35vw";
        document.getElementById('Nirnimg').style.transitionDuration="1s";
        document.getElementById('Nirn-h3').style.left="-75vw";
        document.getElementById('Nirn-h3').style.top="12vh";
    }, 500);
    x=26;
}

