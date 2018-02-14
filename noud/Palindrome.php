<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $a = strtolower(preg_replace("/[^A-Za-z0-9]/","",$word));
	if ($a==strrev($a)) {
		return true;
	} else {
		return false;
	}
    }
}

$palindrome = new Palindrome;
echo $palindrome->isPalindrome('Deleveled');


