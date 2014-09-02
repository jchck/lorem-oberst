<?php

/*
	First Day Of My Life
	Artist: Bright Eyes
	ALbum: I'm Wide Awake, It's Morning
	Release Date: 2005
*/

class FirstDayLife {
	function __construct() {
		add_shortcode( 'first-day-of-my-life', array('FirstDayLife', 'first_day_life_func'));
	}

	function first_day_life_func($atts, $content = null) {
		$lyrics = '<p>This is the first day of my life I swear I was born right in the doorway I went out in the rain suddenly everything changed They\'re spreading blankets on the beach</p>
		<p>Yours is the first face that I saw I think I was blind before I met you Now I don’t know where I am  I don’t know where I’ve been But I know where I want to go</p>
		<p>And so I thought I’d let you know That these things take forever I especially am slow But I realize that I need you And I wondered if I could come home</p>
		<p>Remember the time you drove all night Just to meet me in the morning And I thought it was strange you said everything changed You felt as if you\'d just woke up And you said “this is the first day of my life I’m glad I didn’t die before I met you But now I don’t care I could go anywhere with you And I’d probably be happy”</p>
		<p>So if you want to be with me With these things there’s no telling We just have to wait and see But I’d rather be working for a paycheck Than waiting to win the lottery Besides maybe this time is different I mean I really think you like me</p>';

		$text = explode(' ', $lyrics);
		$text = implode(' ', $text);

		return $text;
	}
}

$jaechick = new FirstDayLife();