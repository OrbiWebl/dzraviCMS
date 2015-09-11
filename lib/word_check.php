<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function limitWords($text, $num = 5, $saveTags = null, $more = '...')
	{
		$cText = $saveTags !== null ? strip_tags($text, $saveTags) : $text;
		$words = explode(' ', $cText);
		if (count($words) > $num)
		{
			$words = array_slice($words, 0, $num); 
			$lText = implode(' ', $words);
			$lText .= $more;
		}
		else
		{
			$lText = implode(' ', $words);
		}
		return $lText;
	}

	/**
	 * Get first and last limited symbols from string
	 *
	 * @param string $text Input text.
	 * @param int $num Symbols count for start and end.
	 * @param string $more string for middle to texts
	 *
	 * @return string
	 */
	function compress($text, $num = 10, $middle = ' ... ')
	{
		if (mb_strlen($text, 'UTF-8') > $num * 2)
		{ 
			$text = mb_substr($text, 0, $num, 'UTF-8').$middle.mb_substr($text, 0 - $num, 'UTF-8');
		}
		return $text;
	}