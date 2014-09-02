<?php

/*
	Falling Gold Mine Gutted
	Artist: Bright Eyes
	Album: Digital Ash In A Digital Urn
	Release Date: 2005
*/

class GoldMineGutted {
	function __construct() {
		add_shortcode( 'gold-mine-gutted', array('GoldMineGutted', 'gold_mine_gutted_func') );
	}

	function gold_mine_gutted_func($atts, $content = null){
		$lyrics = '<p>It was don delillo, whiskey neat, And a blinking midnight clock Speakers on a tv stand, just a turntable to watch When the smoke came out our mouths On all those hooded sweatshirt walks You were a stroke of luck We were a goldmine and they gutted us</p>
		<p>And from the sidelines You see me run Until I\'m out of breath Living the good life I left for dead The sorrowful midwest Well I did my best To keep my head</p>
		<p>It was grass stained jeans and incompletes And a girl from class to touch But you think about yourself too much And you ruin who you love Well all these claims at consciousness My stray dog freedom Let\'s have a nice clean cut Like a bag we buy and divvy up</p>
		<p>And from the sidelines I see you run Until you\'re out of breath. And all those white lines that sped us up We hurry to our death Well I lagged behind So you got ahead</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text;
	}
}

$jaechick = new GoldMineGutted();