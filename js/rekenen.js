function Keuze(){
    var Keuze = document.getElementById('Variant').value;
    document.getElementById("result").innerHTML = "";
    switch (Keuze){
        case "Tafel":
            document.getElementById("result").innerHTML = Tafel();
            break;
        case "Macht":
            document.getElementById("result").innerHTML = Machten();
            break;
        case "Kwadraat":
            document.getElementById("result").innerHTML = Kwadraten();
            break;
        case "Breuk":
            document.getElementById("result").innerHTML = Breuken();
            break;
        default:
            break;
    }
}
function opzetKeuze(){ 
    var Keuze = document.getElementById('Variant').value;
    document.getElementById("result").innerHTML = "";
    switch (Keuze){
        case "Tafel":
            document.getElementById("tot").style.display = "inline-block";
            break;
        case "Macht":
            document.getElementById("tot").style.display = "inline-block";
            break;
        case "Kwadraat":
            document.getElementById("tot").style.display = "none";
            break;
        case "Breuk":
            document.getElementById("tot").style.display = "none";
            break;
        default:
            break;
    }
}

// Tafel van X
function Tafel(){
    var resultaat = "";    
    var invoer = document.getElementById('invoer').value;
    var limit = document.getElementById('tot').value;
    for(var i = 0; i <= limit; i++){
        resultaat += i + "x" + invoer + "=" + (i * invoer) + "<br>";
    }
    return resultaat;
}
// Machtreeks van X
function Machten(){
    var resultaat = "";    
    var invoer = document.getElementById('invoer').value;
    var limit = document.getElementById('tot').value;
    for(var i = 0; i <= limit; i++){
        resultaat += invoer + "<sup>" + i + "</sup> = " + (Math.pow(invoer, i)) + "<br>";
    }
    return resultaat;
}
// Breukenreeks van 1 t/m X
function Breuken(){
    var resultaat = "";    
    var invoer = document.getElementById('invoer').value;

    for(var i = 1; i <= invoer; i++){
        resultaat += 1 / i + "<br>";
    }
    return resultaat;

}
//Kwadratenreeks tot X
function Kwadraten(){
    var resultaat = "";    
    var invoer = document.getElementById('invoer').value;
    for(var i = 1; i <= invoer; i++){
        resultaat += (Math.pow(i,2)) + "<br>";
    }
    return resultaat;

}