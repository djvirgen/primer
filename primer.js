var Primer = {
  isPrime: function(number) {
    if (number < 1) return false;
    if (number == 1) return true;
    
    for (var i = 2, l = Math.sqrt(number); i <= l; i++) {
      if (!Primer.isPrime(i)) continue;
      if (number % i == 0) return false;
    }
    
    return true;
  },
  
  getPrimes: function(min, max) {
    var primes = [];
    
    for (i = min; i <= max; i++) {
      if (Primer.isPrime(i)) primes.push(i);
    }
    
    return primes;
  }
};

t1 = new Date().getTime();
primes = Primer.getPrimes(1, 10000);
t2 = new Date().getTime();

print(primes.join(' '));
print("Found " + primes.length + " prime numbers in " + (t2 - t1)/1000 + " sec.");