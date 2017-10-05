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

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fibonacci</title>
  </head>

  <body>
    <h1>Fibonacci</h1>

    <ul>
      <li>fibonacci(5) = <?php echo fibonacci(5); ?></li>
      <li>fibonacci(10) = <?php echo fibonacci(10); ?></li>
      <li>fibonacci(1) = <?php echo fibonacci(1); ?></li>
    </ul>
  </body>
</html>
