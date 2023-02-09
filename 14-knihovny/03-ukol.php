<?php
function celsius ($farhait)
{
	$celsius = ($farhait - 32)/1.8;
	return $celsius;
}

function farhait ($celsius)
{
	$farhait = ($celsius *  1.8) +32;
	return $farhait;
}