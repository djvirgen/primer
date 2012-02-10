<?php

class Primer
{
  public static function is_prime($number)
  {
    if ($number < 1) return false;
    if ($number == 1) return true;
    
    for ($i = 2, $l = sqrt($number); $i <= $l; $i++) {
      if (!self::is_prime($i)) continue;
      if ($number % $i == 0) return false;
    }
    
    return true;
  }
  
  public static function all_primes($min, $max)
  {
    $primes = array();
    
    for ($i = $min; $i <= $max; $i++) {
      if (self::is_prime($i)) $primes[] = $i;
    }
    
    return $primes;
  }
}

$t1 = microtime(true);
$primes = Primer::all_primes(1, 10000);
$t2 = microtime(true);

echo implode($primes, ' ') . PHP_EOL;
echo "Found " . count($primes) . " prime numbers in " . ($t2 - $t1) . " sec." . PHP_EOL;