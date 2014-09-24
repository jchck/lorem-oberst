<?php

/*
	Poison Oak
	Artist: Bright Eyes
	Album: I'm Wide Awake, It's Morning
	Release Date: 2005
*/

class PoisonOak {
	function __construct(){
		add_shortcode( 'poison-oak', array('PoisonOak', 'poison_oak_func') );
	}

	function poison_oak_func( $atts, $content = null ){
		$lyrics = '<p>poison oak some boyhood bravery when a telephone was a tin can on a string and I fell asleep with you still talking to me you said you weren\'t afraid to die</p>
		<p>in polaroids you were dressed in women\'s clothes were you made ashamed why\'d you lock them in a drawer? well I don\'t think that I ever loved you more</p>
		<p>then when you turned away when you slammed the door when you stole the car and drove towards Mexico and you wrote bad checks just to fill your arm I was young enough I still believed in war</p>
		<p>well let the poets cry themselves to sleep and all their tearful words will turn back into steam</p>
		<p>but me I\'m a single cell  on a serpents tongue there\'s a muddy field where a garden was and I\'m glad you got away but I\'m stuck out here my clothes are soaking wet from your brothers tears</p>
		<p>and I never thought this life was possible you\'re the yellow bird that I\'ve been waiting for</p>
		<p>the end of paralysis I was a statuette now I\'m drunk as hell on a piano bench and when I press the keys it all gets reversed the sound of loneliness make me happier</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text;
	}
}

$jaechick = new PoisonOak();