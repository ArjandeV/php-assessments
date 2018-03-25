<?php
class Palindrome
{
  public function isPalindrome( $word )  
  {
    if ( strtolower( $word ) === strrev( strtolower( $word ) ) ){
      return true;  
    } else {
      return false;      
    }  
  }
}

$palindrome = new Palindrome;
echo $palindrome->isPalindrome( 'Deleveled' );
