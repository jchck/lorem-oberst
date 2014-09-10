<?php
	
/*
	We Are Nowhere And It's Now
	Artist: Bright Eyes
	Album: I'm Wide Awake, It's Morning
	Release Date: 2005
*/

class NowhereNow {
	function __construct() {
		add_shortcode( 'we-are-nowhere-and-its-now', array( 'NowhereNow', 'nowhere_now_func' ));
	}

	function nowhere_now_func($atts, $content = null){
		$lyrics = '<p>If you hate the taste of wine why do you drink it til you\'re blind? and if you swear that there\'s no truth and who cares how come you say it like you\'re right? why are you scared to dream of god when it\'s salvation that you want? you see stars that clear have been dead for years but the idea just lives on</p>
		<p>In our wheels that roll around as we move over the ground and all day it seems we\'ve been in between the past and future town</p>
		<p>We are nowhere, and it\'s now we are nowhere, and it\'s now you took a ten-minute dream in the passengers seat while the world it was flying by I haven\'t been gone very long but it feels like a lifetime</p>
		<p>I\'ve been sleeping so strange at night side effects they don\'t advertise I\'ve been sleeping so strange with a head full of pesticide</p>
		<p>I got no plans and too much time I feel too restless to unwind I\'m always lost in thought as I walk a block to my favourite neon sign where the waitress looks concerned but she never says a word just turns the jukebox on  and we hum along and I smile back at her</p>
		<p>And my friend comes after work when the features start to blur she says these bars are filled with things that kill by now you probably should have learned</p>
		<p>Did you forget that yellow bird? How could you forget your yellow bird?</p>
		<p>She took a small silver wreathe and pinned it onto me she said this one will bring you love I don\'t know if it\'s true but I keep it for good luck</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text;
	}
}

$jaechick = new NowhereNow();