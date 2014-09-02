<?php

/*
	Bowl of Oranges
	Artist: Bright Eyes
	Album: Lifted or The Story Is in the Soil, Keep Your Ear to the Ground
	Release Date: 2002
*/

class BowlOfOranges {
	function __construct() {
		add_shortcode( 'bowl-of-oranges', array('BowlOfOranges', 'bowl_of_oranges_func') );
	}

	function bowl_of_oranges_func($atts, $content = null){
		$lyrics = '<p>The rain, it started tapping on the window near my bed. There was a loophole in my dreaming, so I got out of it. And to my surprise my eyes were wide and already open. Just my nightstand and my dresser where those nightmares had just been.</p>
		 <p>So I dressed myself and left then, out into the gray streets. But everything seemed different and completely new to me. The sky, the trees, houses, buildings, even my own body. And each person I encountered, I couldn\'t wait to meet.</p>
		 <p>I came upon a doctor who appeared in quite poor health. I said "I am terribly sorry but there is nothing I can do for you {that} you can\'t do for yourself."He said "Oh yes you can. Just hold my hand. I think that would help." I sat with him a while and then I asked him how he felt.He said, "I think I\'m cured. No, in fact, I\'m sure. Thank you Stranger, for your therapeutic smile."</p>
		 <p>So that is how I learned the lesson that everyone is alone. And your eyes must do some raining if you are ever going to grow. But when crying don\'t help and you can\'t compose yourself. It is best to compose a poem, an honest verse of longing or simple song of hope.</p>
		 <p>That is why I\'m singing... Baby don\'t worry cause now I got your back. And every time you feel like crying, I\'m gonna try and make you laugh. And if I can\'t, if it just hurts too bad, then we will wait for it to pass and I will keep you company through those days so long and black.</p>
		 <p>And we\'ll keep working on the problem we know we\'ll never solve Of Love\'s uneven remainders, our lives are fractions of a whole. But if the world could remain within a frame like a painting on a wall. Then I think we would see the beauty. Then we would stand staring in awe at our still lives posed like a bowl of oranges, like a story told by the fault lines and the soil.</p>';

	 	$text = explode(' ', $lyrics);
	 	$text = implode(' ', $text);

		 return $text;
	}
}

$jaechick = new BowlOfOranges();