x5=0;

function era3(){
    if(x5==0){
        document.getElementById('V').style.height="100vh";
        document.getElementById('V').style.width="100vw";
        document.getElementById('V').style.zIndex="2";
        document.getElementById('V').style.marginLeft="calc(-100vw / 3)";
        document.getElementById('divV').style.marginLeft="85vw";
        document.getElementById('divV').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('V').style.marginTop="-50vh";
            setTimeout(() => {
                document.getElementById('divV').style.marginTop="70vh";
                document.getElementById('e2-0').style.top="10vh";
                document.getElementById('e2-0').style.transitionDuration="1s";
                document.getElementById('e2-1').style.left="10.7vw";
                document.getElementById('e2-2').style.top="35vh";
                document.getElementById('e2-2').style.transitionDuration="1s";
            }, 200);
        }, 250);
        x5=1;
    }else if(x5==1){
        document.getElementById('divV').style.marginTop="70vh";
        document.getElementById('e2-0').style.top="-100vh";
        document.getElementById('e2-0').style.transitionDuration="0.5s";
        document.getElementById('e2-1').style.left="-100.7vw";
        document.getElementById('e2-2').style.top="300vh";
        document.getElementById('e2-2').style.transitionDuration="0.5s";
        setTimeout(() => {
            document.getElementById('V').style.height="calc(100vh / 2)";
            document.getElementById('V').style.width="calc(100vw / 3)";
            document.getElementById('V').style.marginLeft="0";
            document.getElementById('divV').style.marginTop=" calc(((100vh / 2) / 2) - (20vh / 2))";
            document.getElementById('divV').style.marginLeft="calc(((100vw / 3) / 2) - (10vw / 2))";
            document.getElementById('divV').style.transitionDuration="1s";
            setTimeout(() => {
                document.getElementById('V').style.marginTop="0";
            }, 200);
        }, 300);
        x5=0;
    }else if(x5==2){
        document.getElementById('e2-3').style.top="300vh";
        document.getElementById('e2-2').style.top="35vh";
        document.getElementById('e2-2').style.transitionDuration="1s";
        document.getElementById('e2-3').style.transitionDuration="1s";
        x5=1;
    }else if(x5==3){
        document.getElementById('e2-4').style.top="300vh";
        document.getElementById('e2-4').style.transitionDuration="1s";
        document.getElementById('e2-3').style.top="35vh";
        document.getElementById('e2-3').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="35vh";
            document.getElementById('e2-1').style.height="37vh";
            document.getElementById('e2-1').style.lineHeight="7";
        }, 500);
        x5=2;
    }else if(x5==4){
        document.getElementById('e2-4').style.left="17.5vw";
        document.getElementById('e2-4').style.transitionDuration="1s";
        document.getElementById('e2-1').style.left="10.7vw";
        document.getElementById('e2-1').style.transitionDuration="1s";
        document.getElementById('e2-5').style.top="-100vh";
        document.getElementById('e2-5').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        document.getElementById('e2-6').style.top="300vh";
        document.getElementById('e2-6').style.transitionDuration="1s";
        x5=3;
    }else if(x5==5){
        document.getElementById('e2-7').style.top="300vh";
        document.getElementById('e2-7').style.transitionDuration="1s";
        document.getElementById('e2-4').style.top="20vh";
        document.getElementById('e2-4').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="20vh";
            document.getElementById('e2-1').style.height="63.7vh";
            document.getElementById('e2-1').style.lineHeight="12.5";
        }, 500);
        x5=3;
    }else if(x5==6){
        document.getElementById('e2-7').style.left="17.5vw";
        document.getElementById('e2-7').style.transitionDuration="1s";
        document.getElementById('e2-1').style.left="10.7vw";
        document.getElementById('e2-1').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        document.getElementById('e2-8').style.top="-100vh";
        document.getElementById('e2-8').style.transitionDuration="1s";
        document.getElementById('e2-9').style.top="300vh";
        document.getElementById('e2-9').style.transitionDuration="1s";
        x5=5;
    }else if(x5==7){
        document.getElementById('e2-7').style.left="17.5vw";
        document.getElementById('e2-7').style.transitionDuration="1s";
        document.getElementById('e2-1').style.left="10.7vw";
        document.getElementById('e2-1').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        document.getElementById('e2-10').style.top="-100vh";
        document.getElementById('e2-10').style.transitionDuration="1s";
        document.getElementById('e2-11').style.top="300vh";
        document.getElementById('e2-11').style.transitionDuration="1s";
        x5=5;
    }else if(x5==8){
        document.getElementById('e2-12').style.top="300vh";
        document.getElementById('e2-12').style.transitionDuration="1s";
        document.getElementById('e2-7').style.top="30vh";
        document.getElementById('e2-7').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="30vh";
            document.getElementById('e2-1').style.height="45.9vh";
            document.getElementById('e2-1').style.lineHeight="9";
        }, 500);
        x5=5;
    }else if(x5==9){
        document.getElementById('e2-12').style.left="17.5vw";
        document.getElementById('e2-12').style.transitionDuration="1s";
        document.getElementById('e2-1').style.left="10.7vw";
        document.getElementById('e2-1').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        document.getElementById('e2-13').style.top="-100vh";
        document.getElementById('e2-13').style.transitionDuration="1s";
        document.getElementById('e2-14').style.top="300vh";
        document.getElementById('e2-14').style.transitionDuration="1s";
        x5=8;
    }else if(x5==10){
        document.getElementById('e2-15').style.top="300vh";
        document.getElementById('e2-15').style.transitionDuration="1s";
        document.getElementById('e2-12').style.top="30vh";
        document.getElementById('e2-12').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="30vh";
            document.getElementById('e2-1').style.height="45.9vh";
            document.getElementById('e2-1').style.lineHeight="9";
        }, 500);
        x5=8;
    }else if(x5==11){
        document.getElementById('e2-16').style.top="300vh";
        document.getElementById('e2-16').style.transitionDuration="1s";
        document.getElementById('e2-15').style.top="30vh";
        document.getElementById('e2-15').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="30vh";
            document.getElementById('e2-1').style.height="45.9vh";
            document.getElementById('e2-1').style.lineHeight="9";
        }, 500);
        x5=10;
    }else if(x5==12){
        document.getElementById('e2-16').style.left="17.5vw";
        document.getElementById('e2-16').style.transitionDuration="1s";
        document.getElementById('e2-1').style.left="10.7vw";
        document.getElementById('e2-1').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        document.getElementById('e2-17').style.top="-100vh";
        document.getElementById('e2-17').style.transitionDuration="1s";
        document.getElementById('e2-18').style.top="300vh";
        document.getElementById('e2-18').style.transitionDuration="1s";
        x5=10;
    }else if(x5==13){
        document.getElementById('e2-19').style.top="300vh";
        document.getElementById('e2-19').style.transitionDuration="1s";
        document.getElementById('e2-16').style.top="20vh";
        document.getElementById('e2-16').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="20vh";
            document.getElementById('e2-1').style.height="59.2vh";
            document.getElementById('e2-1').style.lineHeight="12";
        }, 500);
        x5=11;
    }else if(x5==14){
        document.getElementById('e2-19').style.left="17.5vw";
        document.getElementById('e2-19').style.transitionDuration="1s";
        document.getElementById('e2-1').style.left="10.7vw";
        document.getElementById('e2-1').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="2.5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        document.getElementById('e2-20').style.top="-100vh";
        document.getElementById('e2-20').style.transitionDuration="1s";
        document.getElementById('e2-21').style.top="300vh";
        document.getElementById('e2-21').style.transitionDuration="1s";
        x5=13;
    }
}

function era3S(){
    efectito();
    if(x5==1){
        document.getElementById('e2-2').style.top="300vh";
        document.getElementById('e2-3').style.top="35vh";
        document.getElementById('e2-3').style.transitionDuration="1s";
        document.getElementById('e2-2').style.transitionDuration="1s";
        x5=2;
    }else if(x5==2){
        document.getElementById('e2-3').style.top="300vh";
        document.getElementById('e2-3').style.transitionDuration="1s";
        document.getElementById('e2-4').style.top="20vh";
        document.getElementById('e2-4').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="20vh";
            document.getElementById('e2-1').style.height="63.7vh";
            document.getElementById('e2-1').style.lineHeight="12.5";
        }, 500);
        x5=3;
    }else if(x5==3){
        document.getElementById('e2-4').style.top="300vh";
        document.getElementById('e2-4').style.transitionDuration="1s";
        document.getElementById('e2-7').style.top="30vh";
        document.getElementById('e2-7').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="30vh";
            document.getElementById('e2-1').style.height="45.9vh";
            document.getElementById('e2-1').style.lineHeight="9";
        }, 500);
        x5=5;
    }else if(x5==5){
        document.getElementById('e2-7').style.top="300vh";
        document.getElementById('e2-7').style.transitionDuration="1s";
        document.getElementById('e2-12').style.top="30vh";
        document.getElementById('e2-12').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="30vh";
            document.getElementById('e2-1').style.height="45.9vh";
            document.getElementById('e2-1').style.lineHeight="9";
        }, 500);
        x5=8;
    }else if(x5==8){
        document.getElementById('e2-12').style.top="300vh";
        document.getElementById('e2-12').style.transitionDuration="1s";
        document.getElementById('e2-15').style.top="30vh";
        document.getElementById('e2-15').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="10vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="30vh";
            document.getElementById('e2-1').style.height="45.9vh";
            document.getElementById('e2-1').style.lineHeight="9";
        }, 500);
        x5=10;
    }else if(x5==10){
        document.getElementById('e2-15').style.top="300vh";
        document.getElementById('e2-15').style.transitionDuration="1s";
        document.getElementById('e2-16').style.top="20vh";
        document.getElementById('e2-16').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="20vh";
            document.getElementById('e2-1').style.height="59.2vh";
            document.getElementById('e2-1').style.lineHeight="12";
        }, 500);
        x5=11;
    }else if(x5==11){
        document.getElementById('e2-16').style.top="300vh";
        document.getElementById('e2-16').style.transitionDuration="1s";
        document.getElementById('e2-19').style.top="15vh";
        document.getElementById('e2-19').style.transitionDuration="1s";
        document.getElementById('e2-0').style.top="2.5vh";
        document.getElementById('e2-0').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e2-1').style.top="15vh";
            document.getElementById('e2-1').style.height="72.4vh";
            document.getElementById('e2-1').style.lineHeight="14.5";
        }, 500);
        x5=13;
    }
}

function efectito(){
    setTimeout(() => {
        document.getElementById('e2-1').style.left="10vw";
        document.getElementById('e2-1').style.transitionDuration="0.5s";
        setTimeout(() => {
            document.getElementById('e2-1').style.left="10.7vw";
            document.getElementById('e2-1').style.transitionDuration="0.5s";
        }, 500);
    }, 0);
}

function era3U(){
    document.getElementById('e2-4').style.left="200vw";
    document.getElementById('e2-4').style.transitionDuration="1s";
    document.getElementById('e2-1').style.left="-200vw";
    document.getElementById('e2-1').style.transitionDuration="1s";
    document.getElementById('e2-0').style.top="-100vh";
    document.getElementById('e2-0').style.transitionDuration="1s";
    document.getElementById('e2-5').style.top="10vh";
    document.getElementById('e2-5').style.transitionDuration="1s";
    document.getElementById('e2-6').style.top="30vh";
    document.getElementById('e2-6').style.transitionDuration="1s";
    x5=4;
}

function era3UVII(){
    document.getElementById('e2-7').style.left="200vw";
    document.getElementById('e2-7').style.transitionDuration="1s";
    document.getElementById('e2-1').style.left="-200vw";
    document.getElementById('e2-1').style.transitionDuration="1s";
    document.getElementById('e2-0').style.top="-100vh";
    document.getElementById('e2-0').style.transitionDuration="1s";
    document.getElementById('e2-8').style.top="10vh";
    document.getElementById('e2-8').style.transitionDuration="1s";
    document.getElementById('e2-9').style.top="35vh";
    document.getElementById('e2-9').style.transitionDuration="1s";
    x5=6;
}

function era3T(){
    document.getElementById('e2-7').style.left="200vw";
    document.getElementById('e2-7').style.transitionDuration="1s";
    document.getElementById('e2-1').style.left="-200vw";
    document.getElementById('e2-1').style.transitionDuration="1s";
    document.getElementById('e2-0').style.top="-100vh";
    document.getElementById('e2-0').style.transitionDuration="1s";
    document.getElementById('e2-10').style.top="10vh";
    document.getElementById('e2-10').style.transitionDuration="1s";
    document.getElementById('e2-11').style.top="35vh";
    document.getElementById('e2-11').style.transitionDuration="1s";
    x5=7;
}

function era3Y(){
    document.getElementById('e2-12').style.left="200vw";
    document.getElementById('e2-12').style.transitionDuration="1s";
    document.getElementById('e2-1').style.left="-200vw";
    document.getElementById('e2-1').style.transitionDuration="1s";
    document.getElementById('e2-0').style.top="-100vh";
    document.getElementById('e2-0').style.transitionDuration="1s";
    document.getElementById('e2-13').style.top="10vh";
    document.getElementById('e2-13').style.transitionDuration="1s";
    document.getElementById('e2-14').style.top="35vh";
    document.getElementById('e2-14').style.transitionDuration="1s";
    x5=9;
}

function era3D(){
    document.getElementById('e2-16').style.left="200vw";
    document.getElementById('e2-16').style.transitionDuration="1s";
    document.getElementById('e2-1').style.left="-200vw";
    document.getElementById('e2-1').style.transitionDuration="1s";
    document.getElementById('e2-0').style.top="-100vh";
    document.getElementById('e2-0').style.transitionDuration="1s";
    document.getElementById('e2-17').style.top="10vh";
    document.getElementById('e2-17').style.transitionDuration="1s";
    document.getElementById('e2-18').style.top="35vh";
    document.getElementById('e2-18').style.transitionDuration="1s";
    x5=12;
}

function era3P(){
    document.getElementById('e2-19').style.left="200vw";
    document.getElementById('e2-19').style.transitionDuration="1s";
    document.getElementById('e2-1').style.left="-200vw";
    document.getElementById('e2-1').style.transitionDuration="1s";
    document.getElementById('e2-0').style.top="-100vh";
    document.getElementById('e2-0').style.transitionDuration="1s";
    document.getElementById('e2-20').style.top="10vh";
    document.getElementById('e2-20').style.transitionDuration="1s";
    document.getElementById('e2-21').style.top="35vh";
    document.getElementById('e2-21').style.transitionDuration="1s";
    x5=14;
}