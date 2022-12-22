x2=0;
function quitar2(){
    document.getElementById('Me2-1').style.left="100vw";
    document.getElementById('Me2-2').style.left="100vw";
    document.getElementById('Me2-3').style.left="100vw";
    document.getElementById('Me2-4').style.left="100vw";
    document.getElementById('Me2-5').style.left="100vw";
    document.getElementById('Me2-6').style.left="100vw";
    document.getElementById('Me2-7').style.left="100vw";
    document.getElementById('Me2-8').style.left="100vw";
}
function entrar2(){
    document.getElementById('Me2-1').style.left="25vw";
    document.getElementById('Me2-2').style.left="25vw";
    document.getElementById('Me2-2').style.top="25vh";
    document.getElementById('Me2-3').style.left="25vw";
    document.getElementById('Me2-3').style.top="42.5vh";
    document.getElementById('Me2-4').style.left="25vw";
    document.getElementById('Me2-4').style.top="60vh";
    document.getElementById('Me2-5').style.left="55vw";
    document.getElementById('Me2-6').style.left="55vw";
    document.getElementById('Me2-6').style.top="25vh";
    document.getElementById('Me2-7').style.left="55vw";
    document.getElementById('Me2-7').style.top="52.5vh";
    document.getElementById('Me2-8').style.left="55vw";
    document.getElementById('Me2-8').style.top="70vh";
}
function info2(){
    //Entrar
    if(x2 == 0){
        document.getElementById('II').style.width="100vw";
        document.getElementById('II').style.height="100vh";
        document.getElementById('II').style.position="absolute";
        document.getElementById('II').style.zIndex="1";
        document.getElementById('II').style.left="0";
        setTimeout(() => {
            entrar2();
        }, 500);
        x2=1;
    }
    //Regresar
    else if(x2 == 1){
        setTimeout(() => {
            document.getElementById('II').style.width="calc(100vw / 3)";
            document.getElementById('II').style.height="calc(100vh / 2)";
            document.getElementById('II').style.transitionDuration="1s";
            document.getElementById('II').style.zIndex="0";
            document.getElementById('II').style.position="relative";
            quitar2();
        }, 500);
        x2=0;
    }
    else if(x2 == 2){
            document.getElementById('raza1').style.left="-40vw";
            document.getElementById('raza2').style.left="-40vw";
            document.getElementById('raza3').style.left="-40vw";
            document.getElementById('Direniimg2').style.left="-40vw";
            document.getElementById('Ayleidimg1').style.left="-40vw";
            document.getElementById('Ayleidimg2').style.left="-40vw";
            document.getElementById('Chimmer').style.left="-40vw";
            document.getElementById('Humanosimg').style.left="-40vw";
            document.getElementById('Ysgramor').style.left="-40vw";
            document.getElementById('Ahzidalimg').style.left="-40vw";
            document.getElementById('Elfosnieveimg').style.left="-40vw";
            document.getElementById('Nochelagrimasimg').style.left="-100vw";
            document.getElementById('Alduin').style.left="-80vw";
            document.getElementById('Me2-1h3').style.left="5vw";
            document.getElementById('Me2-2h3').style.left="5vw";
            document.getElementById('Me2-3h3').style.left="5vw";
            document.getElementById('Me2-4h3').style.left="5vw";
            document.getElementById('Me2-5h3').style.left="5vw";
            document.getElementById('Me2-6h3').style.left="5vw";
            document.getElementById('Me2-7h3').style.left="5vw";
            document.getElementById('Me2-8h3').style.left="5vw";
            document.getElementById('thover').style.left="100vw";
            document.getElementById('Tamrielimg').style.left="100vw";
            quitar2();
        setTimeout(() => {
            entrar2();
        }, 500);
        x2=1;
}
}

function elfos(){
    quitar2();
    document.getElementById('Me2-1h3').style.transitionDuration="1s";
    document.getElementById('Me2-1h3').style.top="10vh";
    document.getElementById('Me2-1h3').style.left="-75vw";
    document.getElementById('Tamrielimg').style.left="26vw";
    document.getElementById('Tamrielimg').style.top="48vh";
    document.getElementById('thover').style.left="26vw";
    document.getElementById('thover').style.top="48vh";
    document.getElementById('Tamrielimg').style.transitionDuration="1s";
    x2=2;
}

function variacionesHombreBestia(){
    document.getElementById('Me2-1h3').style.left="5vw";
    document.getElementById('thover').style.left="100vw";
    document.getElementById('Tamrielimg').style.left="100vw";
    setTimeout(() => {
        document.getElementById('raza1').style.left="26vw";
        document.getElementById('raza1').style.top="5vh";
        document.getElementById('raza2').style.left="51vw";
        document.getElementById('raza2').style.top="5vh";
        document.getElementById('raza3').style.left="76vw";
        document.getElementById('raza3').style.top="5vh";

    }, 500);
    x2=2;
}

function Direni(){
    document.getElementById('Me2-1h3').style.left="5vw";
    document.getElementById('thover').style.left="100vw";
    document.getElementById('Tamrielimg').style.left="100vw";
    setTimeout(() => {
        document.getElementById('Direniimg2').style.left="45vw";
        document.getElementById('Direniimg2').style.top="15vh";

    }, 500);
    x2=2;
}

function Ayleid(){
    quitar2();
    document.getElementById('Me2-2h3').style.transitionDuration="1s";
    document.getElementById('Me2-2h3').style.top="10vh";
    document.getElementById('Me2-2h3').style.left="-75vw";
    x2=2;
}

function Ayleidimg(){
    document.getElementById('Me2-2h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Ayleidimg1').style.left="65vw";
        document.getElementById('Ayleidimg1').style.top="15vh";
        document.getElementById('Ayleidimg2').style.left="25vw";
        document.getElementById('Ayleidimg2').style.top="15vh";
    }, 500);
    x2=2;
}

function Dwemer(){
    quitar2();
    document.getElementById('Me2-3h3').style.transitionDuration="1s";
    document.getElementById('Me2-3h3').style.top="10vh";
    document.getElementById('Me2-3h3').style.left="-75vw";
    x2=2;
}

function Chimmer(){
    document.getElementById('Me2-3h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Chimmer').style.left="45vw";
        document.getElementById('Chimmer').style.top="15vh";

    }, 500);
    x2=2;
}

function Humanos(){
    quitar2();
    document.getElementById('Me2-4h3').style.transitionDuration="1s";
    document.getElementById('Me2-4h3').style.top="10vh";
    document.getElementById('Me2-4h3').style.left="-75vw";
    x2=2;
}
function Humanosimg(){
    quitar2();
    document.getElementById('Me2-4h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Humanosimg').style.left="45vw";
        document.getElementById('Humanosimg').style.top="15vh";
    }, 500);
    x2=2;
}

function Ysgramor(){
    quitar2();
    document.getElementById('Me2-4h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Ysgramor').style.left="45vw";
        document.getElementById('Ysgramor').style.top="15vh";
    }, 500);
    x2=2;
}

function Relaciones(){
    quitar2();
    document.getElementById('Me2-5h3').style.transitionDuration="1s";
    document.getElementById('Me2-5h3').style.top="10vh";
    document.getElementById('Me2-5h3').style.left="-75vw";
    x2=2;
}

function Ahzidal(){
    quitar2();
    document.getElementById('Me2-5h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Ahzidalimg').style.left="45vw";
        document.getElementById('Ahzidalimg').style.top="15vh";
    }, 500);
    x2=2;
}

function elfosNieve(){
    quitar2();
    document.getElementById('Me2-5h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Elfosnieveimg').style.left="45vw";
        document.getElementById('Elfosnieveimg').style.top="15vh";
    }, 500);
    x2=2;
}

function nocheLagrimas(){
    quitar2();
    setTimeout(() => {
        document.getElementById('Me2-6h3').style.transitionDuration="1s";
        document.getElementById('Me2-6h3').style.top="10vh";
        document.getElementById('Me2-6h3').style.left="-75vw";
    }, 500);
    x2=2;
}
function nocheLagrimasImg(){
    quitar2();
    document.getElementById('Me2-6h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Nochelagrimasimg').style.left="25vw";
        document.getElementById('Nochelagrimasimg').style.top="15vh";
    }, 500);
    x2=2;
}

function Venganza(){
    quitar2();
    setTimeout(() => {
        document.getElementById('Me2-7h3').style.transitionDuration="1s";
        document.getElementById('Me2-7h3').style.top="10vh";
        document.getElementById('Me2-7h3').style.left="-75vw";
    }, 500);
    x2=2;
}

function FinalMeretica(){
    quitar2();
    setTimeout(() => {
        document.getElementById('Me2-8h3').style.transitionDuration="1s";
        document.getElementById('Me2-8h3').style.top="10vh";
        document.getElementById('Me2-8h3').style.left="-75vw";
    }, 500);
    x2=2;
}
function Alduin(){
    quitar2();
    document.getElementById('Me2-8h3').style.left="5vw";
    setTimeout(() => {
        document.getElementById('Alduin').style.left="25vw";
        document.getElementById('Alduin').style.top="15vh";
    }, 500);
    x2=2;
}
