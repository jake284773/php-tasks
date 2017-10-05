<?php

for ($i = 1; $i <= 20; $i++) {
  # Divisible by 3 and 5
  if ((($i % 3) === 0) && (($i % 5) === 0)) {
    echo "FizzBuzz\n";
  # Divisible by 3 only
  } else if (($i % 3) === 0) {
    echo "Fizz\n";
  # Divisble by 5 only
  } else if (($i % 5) === 0) {
    echo "Buzz\n";
  # Not divisible by 3 or 5
  } else {
    echo "$i\n";
  }
}

