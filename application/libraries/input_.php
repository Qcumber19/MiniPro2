<?php
class input_{
	function post($text)
	{
		return htmlspecialchars(ltrim(rtrim($_POST[$text])));
	}
	function get($text)
	{
		return htmlspecialchars(ltrim(rtrim($_GET[$text])));
	}
}
?>