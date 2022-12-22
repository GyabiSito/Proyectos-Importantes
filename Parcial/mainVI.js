x6=0;

function era4(){
    if(x6==0){
        document.getElementById('VI').style.height="100vh";
        document.getElementById('VI').style.marginTop="-50vh";
        document.getElementById('VI').style.zIndex="1";
        document.getElementById('VI').style.transitionDuration="1s";
        document.getElementById('divVI').style.marginTop="70vh";
        setTimeout(() => {
            document.getElementById('VI').style.width="100vw";
            document.getElementById('VI').style.marginLeft="calc((-100vw / 3) * 2)";
            setTimeout(() => {
                document.getElementById('divVI').style.marginLeft="85vw";
                setTimeout(() => {
                    document.getElementById('e4-0').style.top="10vh";
                    document.getElementById('e4-0').style.transitionDuration="1s";
                    document.getElementById('e4-1').style.left="10.7vw";
                    document.getElementById('e4-1').style.transitionDuration="1s";
                    document.getElementById('e4-2').style.top="30vh";
                    document.getElementById('e4-2').style.transitionDuration="1s";
                    setTimeout(() => {
                        document.getElementById('VI').style.marginLeft="0";
                        document.getElementById('VI').style.marginTop="0";
                        document.getElementById('VI').style.position="absolute";
                        document.getElementById('VI').style.transitionDuration="0s";
                    }, 1000);
                }, 200);
            }, 100);
        }, 500);
        x6=1;
    }else if(x6==1){
        document.getElementById('divVI').style.marginTop="calc(((100vh / 2) / 2) - (20vh / 2))";
        document.getElementById('e4-0').style.top="-100vh";
        document.getElementById('e4-0').style.transitionDuration="0.5s";
        document.getElementById('e4-1').style.left="-100.7vw";
        document.getElementById('e4-1').style.transitionDuration="0.5s";
        document.getElementById('e4-2').style.top="300vh";
        document.getElementById('e4-2').style.transitionDuration="0.5s";
        document.getElementById('VI').style.height="50vh";
        document.getElementById('VI').style.marginTop="50vh";
        document.getElementById('VI').style.transitionDuration="1s";
        setTimeout(() => {
             document.getElementById('VI').style.width="calc(100vw / 3)";
             document.getElementById('VI').style.marginLeft="calc((100vw / 3) * 2)";
             document.getElementById('divVI').style.marginLeft="calc(((100vw / 3) / 2) - (10vw / 2))";
             setTimeout(() => {
                document.getElementById('VI').style.marginLeft="0";
                document.getElementById('VI').style.marginTop="0";
                document.getElementById('VI').style.position="relative";
                document.getElementById('VI').style.transitionDuration="0s";
                document.getElementById('VI').style.zIndex="0";
             }, 1000);
        }, 1000);
        x6=0;
    }else if(x6==2){
        document.getElementById('e4-3').style.top="300vh";
        document.getElementById('e4-3').style.transitionDuration="1s";
        document.getElementById('e4-2').style.top="30vh";
        document.getElementById('e4-2').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e4-1').style.height="45.9vh";
            document.getElementById('e4-1').style.lineHeight="8.75";
        }, 500);
        x6=1;
    }else if(x6==3){
        document.getElementById('e4-4').style.top="300vh";
        document.getElementById('e4-4').style.transitionDuration="1s";
        document.getElementById('e4-3').style.top="30vh";
        document.getElementById('e4-3').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e4-1').style.height="41.5vh";
            document.getElementById('e4-1').style.lineHeight="7.5";
        }, 500);
        x6=2;
    }else if(x6==4){
        document.getElementById('e4-5').style.top="-100vh";
        document.getElementById('e4-5').style.transitionDuration="1s";
        document.getElementById('e4-4').style.left="17.5vw";
        document.getElementById('e4-4').style.transitionDuration="1s";
        document.getElementById('e4-1').style.left="10.7vw";
        document.getElementById('e4-1').style.transitionDuration="1s";
        document.getElementById('e4-0').style.top="10vh";
        document.getElementById('e4-0').style.transitionDuration="1s";
        document.getElementById('e4-6').style.top="300vh";
        document.getElementById('e4-6').style.transitionDuration="1s";
        x6=3;
    }else if(x6==5){
        document.getElementById('e4-7').style.top="300vh";
        document.getElementById('e4-7').style.transitionDuration="1s";
        document.getElementById('e4-4').style.top="30vh";
        document.getElementById('e4-4').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e4-1').style.height="41.5vh";
            document.getElementById('e4-1').style.lineHeight="7.5";
        }, 500);
        x6=3;
    }else if(x6==6){
        document.getElementById('e4-8').style.top="300vh";
        document.getElementById('e4-8').style.transitionDuration="1s";
        document.getElementById('e4-7').style.top="30vh";
        document.getElementById('e4-7').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e4-1').style.height="50.3vh";
            document.getElementById('e4-1').style.lineHeight="9.5";
        }, 500);
        x6=5;
    }else if(x6==7){
        document.getElementById('e4-0').style.top="10vh";
        document.getElementById('e4-0').style.transitionDuration="1s";
        document.getElementById('e4-1').style.left="10.7vw";
        document.getElementById('e4-1').style.transitionDuration="1s";
        document.getElementById('e4-8').style.left="17.5vw";
        document.getElementById('e4-8').style.transitionDuration="1s";
        document.getElementById('e4-9').style.top="-100vh";
        document.getElementById('e4-9').style.transitionDuration="1s";
        document.getElementById('e4-10').style.top="300vh";
        document.getElementById('e4-10').style.transitionDuration="1s";
        x6=6;
    }else if(x6==8){
        document.getElementById('e4-0').style.top="10vh";
        document.getElementById('e4-0').style.transitionDuration="1s";
        document.getElementById('e4-1').style.left="10.7vw";
        document.getElementById('e4-1').style.transitionDuration="1s";
        document.getElementById('e4-8').style.left="17.5vw";
        document.getElementById('e4-8').style.transitionDuration="1s";
        document.getElementById('e4-11').style.top="-100vh";
        document.getElementById('e4-11').style.transitionDuration="1s";
        document.getElementById('e4-12').style.top="300vh";
        document.getElementById('e4-12').style.transitionDuration="1s";
        x6=6;
    }else if(x6==9){
        document.getElementById('e4-13').style.top="300vh";
        document.getElementById('e4-13').style.transitionDuration="1s";
        document.getElementById('e4-8').style.top="30vh";
        document.getElementById('e4-8').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e4-1').style.height="37vh";
            document.getElementById('e4-1').style.lineHeight="7";
        }, 500);
        x6=6;
    }else if(x6==10){
        document.getElementById('e4-14').style.top="300vh";
        document.getElementById('e4-14').style.transitionDuration="1s";
        document.getElementById('e4-13').style.top="30vh";
        document.getElementById('e4-13').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e4-1').style.height="59.2vh";
            document.getElementById('e4-1').style.lineHeight="11";
        }, 500);
        x6=9;
    }else if(x6==11){
        document.getElementById('e4-0').style.top="10vh";
        document.getElementById('e4-0').style.transitionDuration="1s";
        document.getElementById('e4-1').style.left="10.7vw";
        document.getElementById('e4-1').style.transitionDuration="1s";
        document.getElementById('e4-14').style.left="17.5vw";
        document.getElementById('e4-14').style.transitionDuration="1s";
        document.getElementById('e4-15').style.top="-100vh";
        document.getElementById('e4-15').style.transitionDuration="1s";
        document.getElementById('e4-16').style.top="300vh";
        document.getElementById('e4-16').style.transitionDuration="1s";
        x6=10;
    }else if(x6==12){
        document.getElementById('e4-17').style.top="300vh";
        document.getElementById('e4-17').style.transitionDuration="1s";
        document.getElementById('e4-14').style.top="30vh";
        document.getElementById('e4-14').style.transitionDuration="1s";
        setTimeout(() => {
            document.getElementById('e4-1').style.height="54.7vh";
            document.getElementById('e4-1').style.lineHeight="10";
        }, 500);
        x6=10;
    }
}
function era4S(){
    efectito2();
    if(x6==1){
        document.getElementById('e4-2').style.top="300vh";
        document.getElementById('e4-2').style.transitionDuration="1s";
        document.getElementById('e4-3').style.top="30vh";
        document.getElementById('e4-3').style.transitionDuration="1s";
        document.getElementById('e4-1').style.height="41.5vh";
        document.getElementById('e4-1').style.lineHeight="7.5";
        x6=2;
    }else if(x6==2){
        document.getElementById('e4-3').style.top="300vh";
        document.getElementById('e4-3').style.transitionDuration="1s";
        document.getElementById('e4-4').style.top="30vh";
        document.getElementById('e4-4').style.transitionDuration="1s";
        document.getElementById('e4-1').style.height="41.5vh";
        document.getElementById('e4-1').style.lineHeight="7.5";
        x6=3;
    }else if(x6==3){
        document.getElementById('e4-4').style.top="300vh";
        document.getElementById('e4-4').style.transitionDuration="1s";
        document.getElementById('e4-7').style.top="30vh";
        document.getElementById('e4-7').style.transitionDuration="1s";
        document.getElementById('e4-1').style.height="50.3vh";
        document.getElementById('e4-1').style.lineHeight="9.5";
        x6=5;
    }else if(x6==5){
        document.getElementById('e4-7').style.top="300vh";
        document.getElementById('e4-7').style.transitionDuration="1s";
        document.getElementById('e4-8').style.top="30vh";
        document.getElementById('e4-8').style.transitionDuration="1s";
        document.getElementById('e4-1').style.height="37vh";
        document.getElementById('e4-1').style.lineHeight="7";
        x6=6;
    }else if(x6==6){
        document.getElementById('e4-8').style.top="300vh";
        document.getElementById('e4-8').style.transitionDuration="1s";
        document.getElementById('e4-13').style.top="30vh";
        document.getElementById('e4-13').style.transitionDuration="1s";
        document.getElementById('e4-1').style.height="59.2vh";
        document.getElementById('e4-1').style.lineHeight="11";
        x6=9;
    }else if(x6==9){
        document.getElementById('e4-13').style.top="300vh";
        document.getElementById('e4-13').style.transitionDuration="1s";
        document.getElementById('e4-14').style.top="30vh";
        document.getElementById('e4-14').style.transitionDuration="1s";
        document.getElementById('e4-1').style.height="54.7vh";
        document.getElementById('e4-1').style.lineHeight="10";
        x6=10;
    }else if(x6==10){
        document.getElementById('e4-14').style.top="300vh";
        document.getElementById('e4-14').style.transitionDuration="1s";
        document.getElementById('e4-17').style.top="30vh";
        document.getElementById('e4-17').style.transitionDuration="1s";
        document.getElementById('e4-1').style.height="54.7vh";
        document.getElementById('e4-1').style.lineHeight="10";
        x6=12;
    }
}

function efectito2(){
    if(x6<12){
        document.getElementById('e4-1').style.transform="rotate(360deg)";
        document.getElementById('e4-1').style.transitionDuration="0.4s";
        document.getElementById('e4-1').style.left="80vw";
        setTimeout(() => {
            document.getElementById('e4-1').style.transform="rotate(-360deg)";
            document.getElementById('e4-1').style.left="10.7vw";
            document.getElementById('e4-1').style.transitionDuration="0.4s";
        }, 400);
    }
}

function era4L(){
    document.getElementById('e4-0').style.top="-100vh";
    document.getElementById('e4-0').style.transitionDuration="1s";
    document.getElementById('e4-4').style.left="300vh";
    document.getElementById('e4-4').style.transitionDuration="1s";
    document.getElementById('e4-1').style.left="-300vh";
    document.getElementById('e4-1').style.transitionDuration="1s";
    document.getElementById('e4-5').style.top="10vh";
    document.getElementById('e4-5').style.transitionDuration="1s";
    document.getElementById('e4-6').style.top="30vh";
    document.getElementById('e4-6').style.transitionDuration="1s";
    x6=4;
}

function era4L(){
    document.getElementById('e4-0').style.top="-100vh";
    document.getElementById('e4-0').style.transitionDuration="1s";
    document.getElementById('e4-1').style.left="-300vh";
    document.getElementById('e4-1').style.transitionDuration="1s";
    document.getElementById('e4-8').style.left="300vh";
    document.getElementById('e4-8').style.transitionDuration="1s";
    document.getElementById('e4-9').style.top="10vh";
    document.getElementById('e4-9').style.transitionDuration="1s";
    document.getElementById('e4-10').style.top="30vh";
    document.getElementById('e4-10').style.transitionDuration="1s";
    x6=7;
}

function era4LA(){
    document.getElementById('e4-0').style.top="-100vh";
    document.getElementById('e4-0').style.transitionDuration="1s";
    document.getElementById('e4-1').style.left="-300vh";
    document.getElementById('e4-1').style.transitionDuration="1s";
    document.getElementById('e4-8').style.left="300vh";
    document.getElementById('e4-8').style.transitionDuration="1s";
    document.getElementById('e4-11').style.top="10vh";
    document.getElementById('e4-11').style.transitionDuration="1s";
    document.getElementById('e4-12').style.top="30vh";
    document.getElementById('e4-12').style.transitionDuration="1s";
    x6=8;
}

function era4U(){
    document.getElementById('e4-0').style.top="-100vh";
    document.getElementById('e4-0').style.transitionDuration="1s";
    document.getElementById('e4-1').style.left="-300vh";
    document.getElementById('e4-1').style.transitionDuration="1s";
    document.getElementById('e4-14').style.left="300vh";
    document.getElementById('e4-14').style.transitionDuration="1s";
    document.getElementById('e4-15').style.top="10vh";
    document.getElementById('e4-15').style.transitionDuration="1s";
    document.getElementById('e4-16').style.top="30vh";
    document.getElementById('e4-16').style.transitionDuration="1s";
    x6=11;
}