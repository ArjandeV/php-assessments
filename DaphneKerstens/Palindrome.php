<?php

class Palindrome
{
    /**
     * @param string $word
     * @return bool
     */
    public function isPalindrome($word)
    {
        $lowercasedWord = strtolower($word);
        $reversedWord = strrev($lowercasedWord);

        return $lowercasedWord === $reversedWord;
    }
}

$palindrome = new Palindrome;
echo $palindrome->isPalindrome('Deleveled');
var_dump($palindrome->isPalindrome('Deleveled'));