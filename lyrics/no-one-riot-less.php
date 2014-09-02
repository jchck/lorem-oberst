<?php

/*
	No One Would Riot For Less
	Artist: Bright Eyes
	Album: Cassadaga
	Release Date: 2007
*/

class RiotLess {
	function __construct() {
		add_shortcode( 'no-one-would-riot-for-less', array('RiotLess', 'riot_less_func') );
	}

	function riot_less_func($atts, $content = null) {
		$lyrics = '<p>death may come invisible or in a holy wall of fire in the breath between the markers on some black i-80 mile from the madness of the governments to the vengeance of the sea well everything is eclipsed by the shape of destiny</p>
		<p>so love me now hell is coming yeah kiss my mouth hell is here</p>
		<p>little soldier little insect you know war it has no heart it will kill you in the sunshine or happily in the dark where kindness is a card game or a bent-up cigarette in the trenches in the hard rain with a bullet and a bet</p>
		<p>he says "help me out" hell is coming "oh could you do it now?" hell is here</p>
		<p>see the sterile soil poisoned sky yellow water final scraps of life bringing new tears</p>
		<p>wake baby wake but leave the blanket around you there is no where as safe I\'m leaving this place but there is nothing I\'m planning to take just you just you</p>';

	$text = explode(' ', $lyrics);
	$text = implode(' ', $text);

	return $text;
	}
}

$jaechick = new RiotLess();