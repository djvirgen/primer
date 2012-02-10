class Integer
  def prime?
    return false if self < 1
    return true if self == 1
    
    (2..Math.sqrt(self)).each do |x|
      next unless x.prime?
      return false if self % x == 0
    end
    
    true
  end
  
  def self.primes(min, max)
    primes = []

    (min..max).each do |x|
      primes << x if x.prime?
    end

    primes
  end
end

t1 = Time.new
primes = Integer.primes(1, 10000)
t2 = Time.new

puts primes.join(' ')
puts "Found #{primes.count} prime numbers in #{(t2 - t1)} sec."