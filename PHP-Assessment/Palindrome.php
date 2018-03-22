<?php

class Palindrome
{
    public function isPalindrome($word)
    {
        $word = strtoupper($word);
        $wordCount = strlen($word);
        $z = $wordCount - 1;
        //Hier kijkt de loop of de eerste en de laatste letter in de word gelijk zijn    
        for($i = 0; $i <= ($wordCount / 2); $i++){
            if($word[$i] != $word[$z]) return false;
            $z--;
        }
		
        return true;  
    }
}

$palindrome = new Palindrome;
echo $palindrome->isPalindrome('Deleveled');

?>