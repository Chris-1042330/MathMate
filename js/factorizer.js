function Talstelsel(){
    document.getElementById("result").innerHTML = "";
    var invoer = document.getElementById("invoerB").value;
    var talBegin = document.getElementById("talBegin").value;
    var talEinde = document.getElementById("talEinde").value;

    var base_convert = function(number, initial_base, change_base) {
        if ((initial_base && change_base) <2 || (initial_base && change_base)>36)
            return '?';
        
            return parseInt(number + '', initial_base)
            .toString(change_base);
     }
     
     document.getElementById("result").innerHTML = base_convert(invoer,talBegin,talEinde).toUpperCase();
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