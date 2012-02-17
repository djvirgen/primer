<?php

class Primer
{
  public static function is_prime($number, $known_primes)
  {
    $sqrt = sqrt($number);
    
    for ($i = 0, $l = count($known_primes); $i < $l; $i++) {
      $x = $known_primes[$i];
      if ($x > $sqrt) break;
      if ($number % $x == 0) return false;
    }
    
    return true;
  }
  
  public static function all_primes($max)
  {
    $primes = array();
    
    for ($i = 2; $i <= $max; $i++) {
      if (self::is_prime($i, $primes)) $primes[] = $i;
    }
    
    return $primes;
  }
}

$t1 = microtime(true);
$primes = Primer::all_primes(100000);
$t2 = microtime(true);

echo implode($primes, ' ') . PHP_EOL;
echo "Found " . count($primes) . " prime numbers in " . ($t2 - $t1) . " sec." . PHP_EOL;