x3=0;
function quitar(){
    document.getElementById('Me3-1').style.left="100vw";
    document.getElementById('Me3-2').style.left="100vw";
    document.getElementById('Me3-3').style.left="100vw";
    document.getElementById('Me3-4').style.left="100vw";
    document.getElementById('Me3-5').style.left="100vw";
    document.getElementById('Me3-6').style.left="100vw";
    document.getElementById('Me3-7').style.left="100vw";
    document.getElementById('Me3-8').style.left="100vw";
}
function entrar(){
    document.getElementById('Me3-1').style.left="25vw";
    document.getElementById('Me3-2').style.left="25vw";
    document.getElementById('Me3-2').style.top="25vh";
    document.getElementById('Me3-3').style.left="25vw";
    document.getElementById('Me3-3').style.top="42.5vh";
    document.getElementById('Me3-4').style.left="25vw";
    document.getElementById('Me3-4').style.top="60vh";
    document.getElementById('Me3-5').style.left="55vw";
    document.getElementById('Me3-6').style.left="55vw";
    document.getElementById('Me3-6').style.top="25vh";
    document.getElementById('Me3-7').style.left="55vw";
    document.getElementById('Me3-7').style.top="42.5vh";
    document.getElementById('Me3-8').style.left="55vw";
    document.getElementById('Me3-8').style.top="60vh";
}
function info3(){
    //Entrar
    if(x3 == 0){
        document.getElementById('III').style.width="100vw";
        document.getElementById('III').style.height="100vh";
        document.getElementById('III').style.position="absolute";
        document.getElementById('III').style.zIndex="1";
        document.getElementById('III').style.transitionDuration="1s";
        setTimeout(() => {
            entrar();
        }, 500);
        x3=1;
    }
        //Regresar
        else if(x3 == 1){
            setTimeout(() => {
                setTimeout(() => {
                     document.getElementById('III').style.position="relative";
                     document.getElementById('III').style.zIndex="0";
                     document.getElementById('III').style.marginLeft="0";
                     document.getElementById('III').style.transitionDuration="0s";

                }, 1000);
                document.getElementById('III').style.width="calc(100vw / 3)";
                document.getElementById('III').style.height="calc(100vh / 2)";
                document.getElementById('III').style.marginLeft="calc((100vw / 3) * 2)";
                document.getElementById('III').style.transitionDuration="1s";
                quitar();
            }, 500);
            x3=0;
        }
        else if(x3 == 2){
            document.getElementById('nordicosimg').style.left="100vw";
            document.getElementById('corazonimg').style.left="100vw";
            document.getElementById('alessyaimg').style.left="100vw";
            document.getElementById('descargablancaimg').style.left="100vw";
            document.getElementById('alessyaorden').style.left="100vw";
            document.getElementById('continenteyokuda').style.left="100vw";
            document.getElementById('santaimg').style.left="100vw";
            document.getElementById('morosimg').style.left="100vw";
            document.getElementById('unionclanes').style.left="100vw";
            document.getElementById('rojapelea').style.left="100vw";
            document.getElementById('bretones').style.left="100vw";
            document.getElementById('plaga').style.left="100vw";
            document.getElementById('siaechi').style.left="100vw";
            document.getElementById('Me3-1h3').style.left="5vw";
            document.getElementById('Me3-2h3').style.left="5vw";
            document.getElementById('Me3-3h3').style.left="5vw";
            document.getElementById('Me3-4h3').style.left="5vw";
            document.getElementById('Me3-5h3').style.left="5vw";
            document.getElementById('Me3-6h3').style.left="5vw";
            document.getElementById('Me3-7h3').style.left="5vw";
            document.getElementById('Me3-8h3').style.left="5vw";


        setTimeout(() => {
            entrar();
        }, 500);
        x3=1;
    }
}

function guerra1(){
    quitar();
    document.getElementById('Me3-1h3').style.transitionDuration="1s";
    document.getElementById('Me3-1h3').style.top="10vh";
    document.getElementById('Me3-1h3').style.left="-75vw";
    x3=2;
}
function corazon(){
    document.getElementById('Me3-1h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('corazonimg').style.left="25vw";
        document.getElementById('corazonimg').style.top="15vh";

    }, 500);
    x3=2;
}
function nordicosImg(){
    document.getElementById('Me3-1h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('nordicosimg').style.left="25vw";
        document.getElementById('nordicosimg').style.top="15vh";
    }, 500);
    x3=2;
}
function alessyaImg(){
    document.getElementById('Me3-1h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('alessyaimg').style.left="25vw";
        document.getElementById('alessyaimg').style.top="15vh";
    }, 500);
    x3=2;
}
function descargaBlancaImg(){
    document.getElementById('Me3-1h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('descargablancaimg').style.left="45vw";
        document.getElementById('descargablancaimg').style.top="15vh";
    }, 500);
    x3=2;
}
function guerra2(){
    quitar();
    document.getElementById('Me3-2h3').style.transitionDuration="1s";
    document.getElementById('Me3-2h3').style.top="10vh";
    document.getElementById('Me3-2h3').style.left="-75vw";
    x3=2;
}

function santa(){
    document.getElementById('Me3-2h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('santaimg').style.left="35vw";
        document.getElementById('santaimg').style.top="15vh";
    }, 500);
    x3=2;
}
function guerra3(){
    quitar();
    document.getElementById('Me3-3h3').style.transitionDuration="1s";
    document.getElementById('Me3-3h3').style.top="10vh";
    document.getElementById('Me3-3h3').style.left="-75vw";
    x3=2;
}
function ordenAlessya(){
    document.getElementById('Me3-3h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('alessyaorden').style.left="35vw";
        document.getElementById('alessyaorden').style.top="15vh";
    }, 500);
    x3=2;
}
function yokuda(){
    document.getElementById('Me3-3h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('continenteyokuda').style.left="25vw";
        document.getElementById('continenteyokuda').style.top="15vh";
    }, 500);
    x3=2;
}
function guerra4(){
    quitar();
    document.getElementById('Me3-4h3').style.transitionDuration="1s";
    document.getElementById('Me3-4h3').style.top="10vh";
    document.getElementById('Me3-4h3').style.left="-75vw";
    x3=2;
}
function morosBatalla(){
    document.getElementById('Me3-4h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('morosimg').style.left="25vw";
        document.getElementById('morosimg').style.top="15vh";
    }, 500);
    x3=2;
}
function unionClanes(){
    document.getElementById('Me3-4h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('unionclanes').style.left="25vw";
        document.getElementById('unionclanes').style.top="15vh";
    }, 500);
    x3=2;
}
function guerra5(){
    quitar();
    document.getElementById('Me3-5h3').style.transitionDuration="1s";
    document.getElementById('Me3-5h3').style.top="10vh";
    document.getElementById('Me3-5h3').style.left="-75vw";
    x3=2;
}
function rojapelea(){
    document.getElementById('Me3-5h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('rojapelea').style.left="25vw";
        document.getElementById('rojapelea').style.top="15vh";
    }, 500);
    x3=2;
}
function guerra6(){
    quitar();
    document.getElementById('Me3-6h3').style.transitionDuration="1s";
    document.getElementById('Me3-6h3').style.top="10vh";
    document.getElementById('Me3-6h3').style.left="-75vw";
    x3=2;
}
function bretones(){
    document.getElementById('Me3-6h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('bretones').style.left="25vw";
        document.getElementById('bretones').style.top="15vh";
    }, 500);
    x3=2;
}
function guerra7(){
    quitar();
    document.getElementById('Me3-7h3').style.transitionDuration="1s";
    document.getElementById('Me3-7h3').style.top="10vh";
    document.getElementById('Me3-7h3').style.left="-75vw";
    x3=2;
}
function peste(){
    document.getElementById('Me3-7h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('plaga').style.left="25vw";
        document.getElementById('plaga').style.top="15vh";
    }, 500);
    x3=2;
}
function guerra8(){
    quitar();
    document.getElementById('Me3-8h3').style.transitionDuration="1s";
    document.getElementById('Me3-8h3').style.top="10vh";
    document.getElementById('Me3-8h3').style.left="-75vw";
    x3=2;
}

function siaechi(){
    document.getElementById('Me3-8h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('siaechi').style.left="25vw";
        document.getElementById('siaechi').style.top="15vh";
    }, 500);
    x3=2;
}