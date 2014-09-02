<?php

/*
	Falling Out Of Love At This Volume
	Artist: Bright Eyes
	Album: Collection Of Songs: Recorded 1995-1997
	Release Date: 1998
*/

class LoveVolume {
	function __construct() {
		add_shortcode( 'falling-out-of-love-at-this-volume', array('LoveVolume', 'love_volume_func') );
	}

	function love_volume_func($atts, $content = null){
		$lyrics = '<p>Tell me what you wanted to hear Let me do the right thing Let me do the wrong thing And if it\'s ever this clear I will only say it once Just let me turn the amps way up</p>
		<p>So you can hear nothing And if I die tonight then I guess I die tonight Let me go on</p>
		<p>Just say what you wanted to say I cannot stand these talks dear They only get us nowhere It\'s never resolved We only run around You wanna tell me anyone could be just like me If it\'s a different time and a different place to be You would go on</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text;
	}
}

$jaechick = new LoveVolume();