<?php

function fibonacci($n) {
  if ($n == 0) {
    return 0;
  } else if ($n == 1) {
    return 1;
  } else {
    return fibonacci($n -1) + fibonacci($n - 2);
  }
}

echo "fibonacci(5) = " . fibonacci(5) . "\n";
echo "fibonacci(10) = " . fibonacci(10) . "\n";
echo "fibonacci(1) = " . fibonacci(1) . "\n";
