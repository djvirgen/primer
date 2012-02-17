var Primer = {
  isPrime: function(number, known_primes) {
    var sqrt = Math.sqrt(number);
    
    for (var i = 0, l = known_primes.length, x; i < l; i++) {
      x = known_primes[i];
      if (x > sqrt) break;
      if (number % x == 0) return false;
    }
    
    return true;
  },
  
  getPrimes: function(max) {
    var primes = [];
    
    for (i = 2; i <= max; i++) {
      if (Primer.isPrime(i, primes)) primes.push(i);
    }
    
    return primes;
  }
};

t1 = new Date().getTime();
primes = Primer.getPrimes(100000);
t2 = new Date().getTime();

print(primes.join(' '));
print("Found " + primes.length + " prime numbers in " + (t2 - t1)/1000 + " sec.");