console.log('whackamole js file is linked correctly');
var timer = 20;
var score = 0;

(function() {

var moleRappers = $('.moleDivs');

var random;  
function makeRandom() {

	return random = Math.floor( Math.random()* 12);
	console.log('This is the randomly generated number ' + random);
}

function showRapper() {
	$(moleRappers[makeRandom()]).addClass('square' + random);
	console.log(moleRappers[random]);


	setTimeout(function(){
		$(moleRappers[random]).removeClass('square' + random);
	}, 1000);


}
	
	
function game() {
    var gameInterval = setInterval(function() {
    	if(timer > 0) {
    		timer --;
    		$('#timer').html(timer);
    		showRapper();
    	} else{
    		alert('Game Over!!');
    		clearInterval(gameInterval);
	   }

	}, 2000);

}


$('.moleDivs').click(function(){
	if($(this).hasClass('square' + random)) {
		score ++;
		$('#score').html(score);
		$(this).removeClass('square' + random);
	}
});


$('#startGame').click(function(){
	game();
});
	
// end of self invoked function
}) ();
