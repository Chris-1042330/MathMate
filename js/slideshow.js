var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 3000;	// Time Between Switch
	 
// Image List
images[0] = 'https://www.cssdesignawards.com/articleimages/20131231/25-web-place.jpg';
images[1] = 'https://cdn.dribbble.com/users/1118096/screenshots/3450211/dribbble_shot_4.jpg';
images[2] = 'https://i.pinimg.com/originals/08/fd/8f/08fd8f8278d71e4133162215f6436490.jpg';
images[3] = 'https://cdn.dribbble.com/users/906563/screenshots/5150522/cover.jpg';

// Change Image
function changeImg(){
	document.slide.src = images[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;


