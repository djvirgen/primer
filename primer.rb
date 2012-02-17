class Integer
  def prime?(known_primes)
    sqrt = Math.sqrt(self)
    
    known_primes.each do |x|
      break if x > sqrt
      return false if self % x == 0
    end
    
    true
  end
  
  def self.primes(max)
    primes = []

    (2..max).each do |x|
      primes << x if x.prime?(primes)
    end

    primes
  end
end

t1 = Time.new
primes = Integer.primes(100000)
t2 = Time.new

puts primes.join(' ')
puts "Found #{primes.count} prime numbers in #{(t2 - t1)} sec."