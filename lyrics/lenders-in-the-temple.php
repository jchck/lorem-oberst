<?php

/*
	Lenders in the Temple
	Artist: Conor Oberst
	Album: Conor Oberst
	Release Date: 2008
*/

class LendersTemple {
	function __construct() {
		add_shortcode( 'lenders-in-the-temple', array('LendersTemple', 'lenders_temple_func') );
	}

	function lenders_temple_func($atts, $content = null){
		$lyrics = '<p>A short delay, the parrot blues Little voices mimic you It\'s not so hard to make that sound So watch your back, the Ides of March Cut your hair like Joan of Arc Disguise your will, they\'ll find you out And when they do Look out</p>
		<p>There\'s money-lenders inside the temple That circus tiger\'s gonna break your heart Something so wild turned into paper If I loved you, well that\'s my fault</p>
		<p>A bitch in heat, the alpha male Not something she\'d ever tell Except when she got deathly high And out it came like summer rain It washed the cars and everything Felt clean for just a little while A telethon We drunk dialed</p>
		<p>Those starving children they ain\'t got no mother There\'s pink flamingos living in the mall I\'d give a fortune to your infomercial If somebody would just take my call Take my call Take my call</p>
		<p>Hello Patterns in my mind now moving slow Sorrow all across the surface rolls Smoothing out the edges of the stone The lights are out. Where\'d everybody go? Alone</p>
		<p>Erase yourself and you\'ll be free Mandala destroyed by the sea All we are is colored sand So pay to ride the ferris wheel Smile, all that you can feel Is gratitude for what has been Cause it did not Happen</p>
		<p>There\'s money-lenders inside the temple That circus tiger\'s gonna break my heart Something so wild turned into paper If you love me, then that\'s your fault</p>
		<p>There\'s money-lenders inside the temple This crystal city\'s gonna fall apart When all their power turns into vapor If I miss you, well that\'s my fault That\'s my fault That\'s my fault</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text; 
	}
}

$jaechick = new LendersTemple();