<?php

/*
	Lua
	Artist: Bright Eyes
	Album: I'm Wide Awake It's Morning
	Release Date: 2005
*/

class Lua {
	function __construct() {
		add_shortcode( 'lua', array('Lua', 'lua_func') );
	}

	function lua_func($atts, $content = null) {
		$lyrics = '<p>I know that it is freezing but I think we have to walk Keep waving at the taxis, they keep turning their lights off But Julie knows a party at some actors westside lift Supplies are endless in the evening by the morning they\'ll be gone</p>

		<p>When everything is lonely I can be my own best friend I get a coffee and a paper, have my own conversations With the sidewalk and the pigeons and my window reflections The mask I polish in the evening, by the morning looks like shit</p>

		<p>And I know you have a heavy heart, I can feel it when we kiss So many men stronger than me have thrown their backs out trying to lift it But me I\'m not a gamble you can count on me to split The love I sell you in the evening, by the morning won\'t exist</p>

		<p>You\'re looking skinny like a model with your eyes all painted black You keep going to the bathroom always say you\'ll be right back Well it takes one to know one kid I think you\'ve got it bad But what\'s so easy in the evening, by the morning\'s such a drag</p>

		<p>I\'ve got a flask inside my pocket we can share it on the train And if you promise to stay conscious I will try and do the same We might die from medication, but we sure killed all the pain But what was normal in the evening, by the morning seems insane</p>

		<p>And I\'m not sure what the trouble was that started all of this The reason all have run away but the feeling never did It\'s not something I would recommend, but it is one way to live What\'s so simple in the moonlight by the morning never is What\'s so simple in the moonlight now it\'s so complicated What\'s so simple in the moonlight, so simple in the moonlight</p>
		<p>So simple in the moonlight</p>
		<p>So simple in the moonlight</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text;
	}
}

$jaechick = new Lua();