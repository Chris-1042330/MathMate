function draaiRad(){
	var rads = document.getElementsByClassName('radFoto');

	var rand;
	var randSec;
	for(var i = 0; i < rads.length; i++) {
		rand = random(360, 1800);
		randSec = (rand / 360);

		rads[i].style.transform = 'rotate(-' + rand + 'deg)';
		rads[i].style.transition = randSec + 's';

		calcDegree(rand);
	}
	//pakt elke element met klassennaam 'rad'
	//kijkt hoeveel elementen er zijn
	// random int tussen 360 en 1800 
	//gaat elke rad na en voeg de style en transform toe
	//roept functie op
}

//graden berekenen en waarde toevoegen met deze functie
function calcDegree(degree) {
	degree = (degree / 360) % 1;
	var x = 1 / 6;

	var waarde = parseInt(document.getElementById('waarde').innerHTML)

	if (degree > 0 && degree < (x * 1)) {
		waarde = waarde + 1;
	} else if (degree > (x * 1) && degree < (x * 2)) {
		waarde = waarde + 2;
	} else if (degree > (x * 2) && degree < (x * 3)) {
		waarde = waarde + 3;
	} else if (degree > (x * 3) && degree < (x * 4)) {
		waarde = waarde + 4;
	} else if (degree > (x * 4) && degree < (x * 5)) {
		waarde = waarde + 5;
	} else {
		waarde = waarde + 6;
	}

	document.getElementById('waarde').innerHTML = waarde;

	//kijkt hoeveel graden de rad gedraaid is
	//berekent hoeveel graden elke vak(6vakken) is
	//pak de waarde en maakt er int ervan en stopt hem in een var.
	//kijkt hoevel graden het is en dan geeft die de waarde en het getal.
	//veranderd de oude waarde in de nieuwe waarde met innerHTML.
}

// geeft getal terug tussen min en max
function random(min, max) {
	return Math.floor(Math.random() * (max - min) ) + min;
}


function reset() {
	document.getElementById('waarde').innerHTML = 0;
	var rads = document.getElementsByClassName('rad');
	for(var i = 0; i < rads.length; i++) {
		rads[i].style.transform = 'rotate(0deg)';
	}
}
