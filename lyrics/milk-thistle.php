<?php
	
/*
	Milk Thistle
	Artist: Conor Oberst
	Album: Conor Oberst
	Release Date: 2008
*/

class MilkThistle {
	function __construct(){
		add_shortcode( 'milk-thistle', array('MilkThistle', 'milk_thistle_func') );
	}

	function milk_thistle_func($atts, $content = null){
		$lyrics = '<p>Milk thistle, milk thistle let me down slow help me go slow I\'ve been carryin on I\'m not scared of nothin I\'ll go pound for pound I keep death on my mind like a heavy crown if I go to heaven I\'ll be bored as hell like a little baby at the bottom of a well</p>
		<p>Fairchild, fairchild how are you, man did you fix that storefront did you start that band don\'t be scared of nothin you go pound for pound you\'ll bring peace to midnight like a spotted owl I\'ll be rootin for you like my favorite team if somebody sweats you you just point em out to me</p>
		<p>All the sights and sounds this little world\'s too crowded now and there\'s only one way out an elevator ride through the tunnel towards the light and I\'m nowhere bound keep going up and down up and down</p>
		<p>Newspaper, newspaper can\'t take no more you\'re here every morning waitin at my door and I\'m just tryin to kiss you and you stab my eyes make me blue forever like an island sky and I\'m not pretending that it\'s all okay just let me have my coffee before you take away the day</p>
		<p>Lazarus, Lazarus why all the tears did your faithful chauffer just disappear what a lonesome feeling to be waitin around like some washed-up actress in a tinsel town but for the record I\'d come pick you up we\'ll head for the ocean just say when you\'ve had enogh</p>
		<p>All the light and sound this little world\'s too fragile now and there\'s only one way out but if you let me slide I\'ll do my best to make things right and I know where bound just going up and down up and down</p>
		<p>Milk thistle, milk thistle let me down slow just help me go slow I\'ve been hurrin on I was poised for greatness I was down and out I keep death at my heels like a basset hound if I go to heaven I\'ll be bored as hell like a crying baby at the bottom of a well</p>';

		$text = explode('', $lyrics);
		$text = implode('', $text);

		return $text;
	}
}

$jaechick = new MilkThistle();