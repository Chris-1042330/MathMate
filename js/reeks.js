function Fibonacci(){
    document.getElementById("result").innerHTML = "0";

    var getal1 = 0;
    var getal2 = 1;
    var invoer = document.getElementById("invoer").value;

    for(ans = getal1 + getal2;ans < invoer;){
        ans = getal1 + getal2;
        getal1 = getal2;
        getal2 = ans;
        document.getElementById("result").innerHTML += " - " + ans;
    }
}

function PriemgetallenZien(){
    document.getElementById("result").innerHTML = "";
    var invoer = document.getElementById("invoer").value;
    var count = 0;
    var priem = [];

    for(i = 0; i <= invoer; i++){
        priem.push(true);
    }
    for(i=2;i<=invoer;i++){
        // document.getElementById("result").innerHTML += i + " * ";
        if(priem[i]){
            if(count == 0){
                document.getElementById("result").innerHTML += i;
            }
            else{
                document.getElementById("result").innerHTML += " - " + i;
            }
            for(y=i;y<=invoer;y+=i){
                priem[y] = false;
            }
            count++
        }
    }
}

function Ontbinden(){
    document.getElementById("result").innerHTML = "";
    var invoer = document.getElementById("invoer").value;
    var priem = [];
    var count = 0;

    if(invoer<=1){
        document.getElementById("result").innerHTML += "DIT IS NIET DEELBAAR";
    }
    else if(invoer<=3){
        document.getElementById("result").innerHTML += invoer + " is priemgetal"
    }
    else{
        for(i = 0; i <= invoer; i++){
            priem.push(true);
        }
        for(i=2;i<=invoer;i++){
            if(priem[i]){
                for(y=i;y<=invoer;){
                    y+=i;
                    priem[y] = false;
                }
                while (invoer % i == 0) {    
                    invoer /= i;
                    priem.push(i);
                    if(count == 0){
                        document.getElementById("result").innerHTML += i;
                    }
                    else{
                        document.getElementById("result").innerHTML += " x " + i;
                    }
                    count++;
                }
            }
        }
        if(count == 1){
            i--;
            document.getElementById("result").innerHTML = i + " is priemgetal";
        }
    }
}