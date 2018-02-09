<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 2/8/18
 * Time: 11:35 AM
 */

namespace TDD;

function check_palindrome($string) {
    //remove all spaces
    $string = str_replace(' ', '', $string);

    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>It is Palindrome</p>";
    }
    else {
        echo "</p>Not Palindrome</p>";
    }
}

$string = "A man, a plan, a canal, Panama";
check_palindrome($string);
