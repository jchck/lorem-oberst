<?php

/*
	Lover I Don't Have To Love
	Artist: Bright Eyes
	Album: Lifted or The Story Is in the Soil, Keep Your Ear to the Ground
	Release Date: 2002
*/

class LoverDontLove {
	function __construct(){
		add_shortcode( 'lover-i-dont-have-to-love', array('LoverDontLove', 'lover_dont_love_func') );
	}

	function lover_dont_love_func(){
		$lyrics = '<p>I picked you out Of a crowd and talked to you  Said I liked your shoes You said thanks can I follow you?</p>
		<p>So it\'s up the stairs And out of view No prying eyes I poured some wine I asked your name you asked the time</p>
		<p>Now it\'s two o\'clock, the club is closed we\'re up the block Your hands on me I\'m pressing hard against your jeans Your tongue in my mouth Trying to keep the words from coming out You didn\'t care to know Who else may have been you before</p>
		<p>I want a lover I don\'t have to love I want a girl who\'s too sad to give a fuck Where\'s the kid with the chemicals? I thought he said to meet me here but I\'m not sure I got the money if you got the time You said it feels good I said I\'ll give it a try</p>
		<p>Then my mind went dark We both forgot where your car was parked Let\'s just take the train I\'ll meet up with the band in the morning</p>
		<p>Bad actors with bad habits Some sad singers They just play tragic And the phone\'s ringing And the van\'s leaving Let\'s just keep touching Let\'s just keep keep singing</p>
		<p>I want a lover I don\'t have to love I want a boy who\'s so drunk he doesn\'t talk Where\'s the kid with the chemicals I got a hunger and I can\'t seem to get full I need some meaning I can memorize The kind I have always seems to slip my mind</p>
		<p>But you but you You write such pretty words But life\'s no story book Love\'s an excuse to get hurt And to hurt "Do you like to hurt?" "I do! I do!" "Then hurt me."</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text;
	}
}

$jaechick = new LoverDontLove();