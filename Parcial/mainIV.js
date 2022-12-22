x4=0;

function era2(){
    if(x4 == 0){
        document.getElementById('IV').style.position="absolute";
        document.getElementById('IV').style.zIndex="2";
        document.getElementById('IV').style.marginTop="50vh";
        document.getElementById('IV').style.transitionDuration="0s";
        setTimeout(()=>{ 
            document.getElementById('IV').style.height="100vh";
            document.getElementById('IV').style.width="100vw";   
            document.getElementById('IV').style.transitionDuration="1s";
            document.getElementById('divIV').style.marginLeft="85vw";
            document.getElementById('divIV').style.transitionDuration="1s";
        },0);
        setTimeout(()=>{
            document.getElementById('IV').style.marginTop="0";
        },500);
        setTimeout(()=>{
            document.getElementById('divIV').style.marginTop="70vh";
            document.getElementById('e3-1').style.top="40vh";
            document.getElementById('e3-1').style.transitionDuration="1s";
            document.getElementById('e3-0').style.top="10vh";
            document.getElementById('e3-0').style.transitionDuration="1s";
            document.getElementById('e3-2').style.left="10.7vw";
            document.getElementById('e3-2').style.transitionDuration="1s";
        },600);
        setTimeout(()=>{
            document.getElementById('divIV').style.transitionDuration="0.5s";
        },1600);
        x4 = 1;
    }else if(x4 == 1){
        document.getElementById('IV').style.marginTop="50vh";
        document.getElementById('divIV').style.marginTop="calc(((100vh / 2) / 2) - (20vh / 2))";
        document.getElementById('divIV').style.transitionDuration="1s";
        document.getElementById('e3-1').style.top="400vh";
        document.getElementById('e3-1').style.transitionDuration="0.5s";
        document.getElementById('e3-0').style.top="-100vh";
        document.getElementById('e3-0').style.transitionDuration="0.5s";
        document.getElementById('e3-2').style.transitionDuration="0.5s";
        document.getElementById('e3-2').style.left="-100.7vw";
        setTimeout(()=>{
            document.getElementById('IV').style.marginTop="0";
            document.getElementById('IV').style.transitionDuration="0s";
            document.getElementById('IV').style.position="relative";
        },1000);
        setTimeout(()=>{
            document.getElementById('IV').style.height="calc(100vh / 2)";
            document.getElementById('IV').style.width="calc(100vw / 3)";
            document.getElementById('IV').style.zIndex="0";
            document.getElementById('IV').style.transitionDuration="1s";
            document.getElementById('divIV').style.marginLeft="calc(((100vw / 3) / 2) - (10vw / 2))";
        },1050);
        setTimeout(()=>{
            document.getElementById('divIV').style.transitionDuration="0.5s";
        },2050);
        x4 = 0;
    }else if(x4==2){
        document.getElementById('e3-1').style.top="40vh";
        document.getElementById('e3-1').style.transitionDuration="1s";
        document.getElementById('e3-3').style.top="400vh";
        document.getElementById('e3-3').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.height="32.6vh";
            document.getElementById('e3-2').style.lineHeight="6";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 1;
    }else if(x4==3){
        document.getElementById('e3-3').style.top="40vh";
        document.getElementById('e3-3').style.transitionDuration="1s";
        document.getElementById('e3-4').style.top="400vh";
        document.getElementById('e3-4').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.height="28.2vh";
            document.getElementById('e3-2').style.lineHeight="5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 2;
    }else if(x4==4){
        document.getElementById('e3-4').style.top="40vh";
        document.getElementById('e3-4').style.transitionDuration="1s";
        document.getElementById('e3-5').style.top="400vh";
        document.getElementById('e3-5').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="40vh";
            document.getElementById('e3-2').style.height="41.5vh";
            document.getElementById('e3-2').style.lineHeight="7.5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 3;
    }else if(x4==5){
        document.getElementById('e3-5').style.top="30vh";
        document.getElementById('e3-5').style.transitionDuration="1s";
        document.getElementById('e3-6').style.top="400vh";
        document.getElementById('e3-6').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="45.9vh";
            document.getElementById('e3-2').style.lineHeight="8.4";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 4;
    }else if(x4==6){
        document.getElementById('e3-6').style.top="30vh";
        document.getElementById('e3-6').style.transitionDuration="1s";
        document.getElementById('e3-7').style.top="400vh";
        document.getElementById('e3-7').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="45.9vh";
            document.getElementById('e3-2').style.lineHeight="8.4";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 5;
    }else if(x4==7){
        document.getElementById('e3-7').style.left="17.5vw";
        document.getElementById('e3-7').style.transitionDuration="1s";
        document.getElementById('e3-2').style.left="10.7vw";
        document.getElementById('e3-2').style.transitionDuration="1s";
        document.getElementById('e3-0').style.top="10vh";
        document.getElementById('e3-0').style.transitionDuration="1s";
        document.getElementById('e3-8').style.top="400vh";
        document.getElementById('e3-8').style.transitionDuration="1s";
        document.getElementById('e3-9').style.top="-100vh";
        document.getElementById('e3-9').style.transitionDuration="1s";
        x4 = 6;
    }else if(x4==8){
        document.getElementById('e3-7').style.left="17.5vw";
        document.getElementById('e3-7').style.transitionDuration="1s";
        document.getElementById('e3-2').style.left="10.7vw";
        document.getElementById('e3-2').style.transitionDuration="1s";
        document.getElementById('e3-0').style.top="10vh";
        document.getElementById('e3-0').style.transitionDuration="1s";
        document.getElementById('e3-10').style.top="400vh";
        document.getElementById('e3-10').style.transitionDuration="1s";
        document.getElementById('e3-11').style.top="-100vh";
        document.getElementById('e3-11').style.transitionDuration="1s";
        x4 = 6;
    }else if(x4==9){
        document.getElementById('e3-7').style.top="30vh";
        document.getElementById('e3-7').style.transitionDuration="1s";
        document.getElementById('e3-13').style.top="400vh";
        document.getElementById('e3-13').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="50.4vh";
            document.getElementById('e3-2').style.lineHeight="9.4";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 6;
    }else if(x4==10){
        document.getElementById('e3-13').style.top="30vh";
        document.getElementById('e3-13').style.transitionDuration="1s";
        document.getElementById('e3-16').style.top="300vh";
        document.getElementById('e3-16').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="37vh";
            document.getElementById('e3-2').style.lineHeight="7.5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
            document.getElementById('e3-0').style.top="10vh";
            document.getElementById('e3-0').style.transitionDuration="1s";
        },500);
        x4=9;
    }else if(x4==11){
        document.getElementById('e3-13').style.left="17.5vw";
        document.getElementById('e3-13').style.transitionDuration="1s";
        document.getElementById('e3-2').style.left="10.7vw";
        document.getElementById('e3-2').style.transitionDuration="1s";
        document.getElementById('e3-0').style.top="10vh";
        document.getElementById('e3-0').style.transitionDuration="1s";
        document.getElementById('e3-14').style.top="300vh";
        document.getElementById('e3-14').style.transitionDuration="1s";
        document.getElementById('e3-15').style.top="-100vh";
        document.getElementById('e3-15').style.transitionDuration="1s";
        x4=10;
    }else if(x4==12){
        document.getElementById('e3-16').style.top="20vh";
        document.getElementById('e3-16').style.transitionDuration="1s";
        document.getElementById('e3-17').style.top="400vh";
        document.getElementById('e3-17').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="20vh";
            document.getElementById('e3-2').style.height="63.6vh";
            document.getElementById('e3-2').style.lineHeight="11.5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
            document.getElementById('e3-0').style.top="5vh";
            document.getElementById('e3-0').style.transitionDuration="1s";
        },500);
        x4=10;
    }else if(x4==13){
        document.getElementById('e3-17').style.left="17.5vw";
        document.getElementById('e3-17').style.transitionDuration="1s";
        document.getElementById('e3-2').style.left="10.7vw";
        document.getElementById('e3-2').style.transitionDuration="1s";
        document.getElementById('e3-0').style.top="5vh";
        document.getElementById('e3-0').style.transitionDuration="1s";
        document.getElementById('e3-18').style.top="300vh";
        document.getElementById('e3-18').style.transitionDuration="1s";
        document.getElementById('e3-19').style.top="-100vh";
        document.getElementById('e3-19').style.transitionDuration="1s";
        x4=12;
    }
}

function era2S(){
    if(x4 == 1){
        document.getElementById('e3-1').style.top="400vh";
        document.getElementById('e3-1').style.transitionDuration="1s";
        document.getElementById('e3-3').style.top="40vh";
        document.getElementById('e3-3').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.height="28.2vh";
            document.getElementById('e3-2').style.lineHeight="5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 2;
    }else if(x4 == 2){
        document.getElementById('e3-3').style.top="400vh";
        document.getElementById('e3-3').style.transitionDuration="1s";
        document.getElementById('e3-4').style.top="40vh";
        document.getElementById('e3-4').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.height="41.5vh";
            document.getElementById('e3-2').style.lineHeight="7.5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 3;
    }else if(x4==3){
        document.getElementById('e3-4').style.top="400vh";
        document.getElementById('e3-4').style.transitionDuration="1s";
        document.getElementById('e3-5').style.top="30vh";
        document.getElementById('e3-5').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="45.9vh";
            document.getElementById('e3-2').style.lineHeight="8.4";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 4;
    }else if(x4==4){
        document.getElementById('e3-5').style.top="400vh";
        document.getElementById('e3-5').style.transitionDuration="1s";
        document.getElementById('e3-6').style.top="30vh";
        document.getElementById('e3-6').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="45.9vh";
            document.getElementById('e3-2').style.lineHeight="8.4";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 5;
    }else if(x4==5){
        document.getElementById('e3-6').style.top="400vh";
        document.getElementById('e3-6').style.transitionDuration="1s";
        document.getElementById('e3-7').style.top="30vh";
        document.getElementById('e3-7').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="50.4vh";
            document.getElementById('e3-2').style.lineHeight="9.4";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
        },500);
        x4 = 6;
    }else if(x4==6){
        document.getElementById('e3-7').style.top="400vh";
        document.getElementById('e3-7').style.transitionDuration="1s";
        document.getElementById('e3-12').style.top="20vh";
        document.getElementById('e3-12').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="20vh";
            document.getElementById('e3-2').style.height="59.2vh";
            document.getElementById('e3-2').style.lineHeight="11";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
            document.getElementById('e3-0').style.top="5vh";
            document.getElementById('e3-0').style.transitionDuration="1s";
        },500);
        x4=9;
    }else if(x4==9){
        document.getElementById('e3-12').style.top="400vh";
        document.getElementById('e3-12').style.transitionDuration="1s";
        document.getElementById('e3-13').style.top="30vh";
        document.getElementById('e3-13').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="30vh";
            document.getElementById('e3-2').style.height="37vh";
            document.getElementById('e3-2').style.lineHeight="7.5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
            document.getElementById('e3-0').style.top="10vh";
            document.getElementById('e3-0').style.transitionDuration="1s";
        },500);
        x4=10;
    }else if(x4==10){
        document.getElementById('e3-13').style.top="400vh";
        document.getElementById('e3-13').style.transitionDuration="1s";
        document.getElementById('e3-16').style.top="20vh";
        document.getElementById('e3-16').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="20vh";
            document.getElementById('e3-2').style.height="63.6vh";
            document.getElementById('e3-2').style.lineHeight="11.5";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
            document.getElementById('e3-0').style.top="5vh";
            document.getElementById('e3-0').style.transitionDuration="1s";
        },500);
        x4=11;
    }else if(x4==11){
        document.getElementById('e3-16').style.top="400vh";
        document.getElementById('e3-16').style.transitionDuration="1s";
        document.getElementById('e3-17').style.top="20vh";
        document.getElementById('e3-17').style.transitionDuration="1s";
        setTimeout(()=>{
            document.getElementById('e3-2').style.top="20vh";
            document.getElementById('e3-2').style.height="59.2vh";
            document.getElementById('e3-2').style.lineHeight="10";
            document.getElementById('e3-2').style.transitionDuration="0.6s";
            document.getElementById('e3-0').style.top="5vh";
            document.getElementById('e3-0').style.transitionDuration="1s";
        },500);
        x4=12;
    }
}

function era2E(){
    document.getElementById('e3-7').style.left="300vw";
    document.getElementById('e3-7').style.transitionDuration="1s";
    document.getElementById('e3-2').style.left="-300vw";
    document.getElementById('e3-2').style.transitionDuration="1s";
    document.getElementById('e3-0').style.top="-200vh";
    document.getElementById('e3-0').style.transitionDuration="1s";
    document.getElementById('e3-8').style.top="30vh";
    document.getElementById('e3-8').style.transitionDuration="1s";
    document.getElementById('e3-9').style.top="10vh";
    document.getElementById('e3-9').style.transitionDuration="1s";
    x4=7;
}

function era2V(){
    document.getElementById('e3-7').style.left="300vw";
    document.getElementById('e3-7').style.transitionDuration="1s";
    document.getElementById('e3-2').style.left="-300vw";
    document.getElementById('e3-2').style.transitionDuration="1s";
    document.getElementById('e3-0').style.top="-200vh";
    document.getElementById('e3-0').style.transitionDuration="1s";
    document.getElementById('e3-10').style.top="30vh";
    document.getElementById('e3-10').style.transitionDuration="1s";
    document.getElementById('e3-11').style.top="10vh";
    document.getElementById('e3-11').style.transitionDuration="1s";
    x4=8;
}

function era2C(){
    document.getElementById('e3-13').style.left="300vw";
    document.getElementById('e3-13').style.transitionDuration="1s";
    document.getElementById('e3-2').style.left="-300vw";
    document.getElementById('e3-2').style.transitionDuration="1s";
    document.getElementById('e3-0').style.top="-200vh";
    document.getElementById('e3-0').style.transitionDuration="1s";
    document.getElementById('e3-14').style.top="30vh";
    document.getElementById('e3-14').style.transitionDuration="1s";
    document.getElementById('e3-15').style.top="10vh";
    document.getElementById('e3-15').style.transitionDuration="1s";
    x4=11;
}

function era2T(){
    document.getElementById('e3-17').style.left="300vw";
    document.getElementById('e3-17').style.transitionDuration="1s";
    document.getElementById('e3-2').style.left="-300vw";
    document.getElementById('e3-2').style.transitionDuration="1s";
    document.getElementById('e3-0').style.top="-200vh";
    document.getElementById('e3-0').style.transitionDuration="1s";
    document.getElementById('e3-18').style.top="30vh";
    document.getElementById('e3-18').style.transitionDuration="1s";
    document.getElementById('e3-19').style.top="10vh";
    document.getElementById('e3-19').style.transitionDuration="1s";
    x4=13;
}